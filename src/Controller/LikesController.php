<?php


namespace App\Controller;

use App\Entity\Post;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted(User::ROLE_USER)]
class LikesController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    /**
     * Mark the post as liked
     *
     * @param Post $post
     * @var User $currentUser
     * @return Response
     */
    public function like(Post $post): Response
    {
        $currentUser = $this->getUser();

        if (!$currentUser instanceof User) {
            return new JsonResponse([], Response::HTTP_UNAUTHORIZED);
        }
            
        $currentUser->addLikedPost($post);
        
        $this->entityManager->flush();

        return new JsonResponse(
            [
                'count' => $post->getLikedBy()->count(),
            ], 
            Response::HTTP_OK
        );
    }

    /**
     * Mark the post as unliked
     *
     * @param Post $post
     * @var User $currentUser
     * @return Response
     */
    public function unlike(Post $post): Response
    {
        $currentUser = $this->getUser();

        if (!$currentUser instanceof User) {
            return new JsonResponse([], Response::HTTP_UNAUTHORIZED);
        }
            
        $currentUser->removeLikedPost($post);
        
        $this->entityManager->flush();

        return new JsonResponse(
            [
                'count' => $post->getLikedBy()->count(),
            ], 
            Response::HTTP_OK
        );
    }    

}