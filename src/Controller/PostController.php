<?php


namespace App\Controller;

use App\Entity\Post;
use App\Entity\User;
use App\Form\PostType;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    
    private $postRepository;
    private $userRepository;
    private $formFactory;
    private $entityManager;
    private $router;

    public function __construct(
        PostRepository $postRepository, 
        UserRepository $userRepository,
        FormFactoryInterface $formFactory,
        EntityManagerInterface $entityManager,
        RouterInterface $router)
    {
        $this->postRepository = $postRepository;
        $this->userRepository = $userRepository;
        $this->formFactory = $formFactory;
        $this->entityManager = $entityManager;
        $this->router = $router;
    }
    
    /**
     * @return Response
     */
    public function index(): Response
    {
        $currentUser = $this->getUser();
        
        $usersToFollow = array();

        if ($currentUser instanceof User) {
            $posts = $this->postRepository->findAllByUsers($currentUser->getFollowing());
            
            if (count($posts) === 0) {
                $usersToFollow =  $this->userRepository->findOtherUsersWithMoreThan5Posts($currentUser);
            }  
        }
        else {
            $posts = $this->postRepository->findBy([], ['createdAt' => 'DESC']);
        }
        
        return $this->render('post/index.html.twig', [
            'posts' => $posts,
            'usersToFollow' => $usersToFollow,
            //'phpinfo' => phpinfo(),
        ]);
    }

    /**
     * @return Response
     */
    public function addPost(Request $request): Response 
    {
        if ($this->isGranted(USER::ROLE_USER)) {
            $newPost = new Post();
            $datetime = new \DateTime(); 
            $newPost->setCreatedAt($datetime->format("Y-m-d H:i:s"));
            
            $user = $this->getUser();
    
            $newPost->setUser($user);
    
            $form = $this->formFactory->create(PostType::class, $newPost);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
                $this->entityManager->persist($newPost);
                $this->entityManager->flush();
    
                return new RedirectResponse($this->router->generate('posts'));
            }
    
            return $this->render(
                'post/addPost.html.twig', 
                [
                    'form' => $form->createView()
                ]
            );   
        }
        return new Response("Access denied", Response::HTTP_UNAUTHORIZED);
    }

    /**
     * @return Response
     */
    public function editPost(Post $post, Request $request): Response 
    {
        $this->denyAccessUnlessGranted('edit', $post); 

        $form = $this->formFactory->create(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($post);
            $this->entityManager->flush();

            return new RedirectResponse($this->router->generate('posts'));
        }

        return $this->render(
            'post/editPost.html.twig', 
            [
                'form' => $form->createView()
            ]
        );          
    }

    /**
     * @return Response
     */
    public function removePost(Post $post, Request $request): Response
    {
        $this->denyAccessUnlessGranted('delete', $post); 

        $this->entityManager->remove($post);
        $this->entityManager->flush();  
        
        $this->addFlash('notice', 'Post was successfully removed!');

        return new RedirectResponse($this->router->generate('posts'));
    } 

    /**
     * @return Response
     */
    public function viewPost(Post $post): Response 
    {
        return $this->render('post/post.html.twig', [
            'post' => $post,
        ]);        
    } 

    /**
     * @return Response
     */
    public function userPosts(User $user): Response 
    {
        return $this->render('post/user-posts.html.twig', [
            'posts' => $user->getPosts(),
            'user' => $user,
        ]);
    }
}