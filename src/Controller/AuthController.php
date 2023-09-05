<?php


namespace App\Controller;

use App\Entity\User;
use App\Event\UserRegisterEvent;
use App\Form\UserType;
use App\Repository\UserRepository;
use App\Security\TokenGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AuthController extends AbstractController
{
    private $entityManager;
    private $eventDispatcher;
    private $userPasswordHasher;
    private $authenticationUtils;
    private $tokenGenerator;
    private $userRepository;

    public function __construct(
        EntityManagerInterface $entityManager, 
        EventDispatcherInterface $eventDispatcher,
        UserPasswordHasherInterface $userPasswordHasher,
        AuthenticationUtils $authenticationUtils,
        TokenGenerator $tokenGenerator,
        UserRepository $userRepository
    )
    {
        $this->entityManager = $entityManager;
        $this->eventDispatcher = $eventDispatcher;
        $this->userPasswordHasher = $userPasswordHasher;
        $this->authenticationUtils = $authenticationUtils;
        $this->tokenGenerator = $tokenGenerator;
        $this->userRepository = $userRepository;
    }
    
    /**
     * @return Response
     */
    public function login(): Response
    {
        return $this->render('auth/login.html.twig', [
            'last_username' => $this->authenticationUtils->getLastUsername(),
            'error' => $this->authenticationUtils->getLastAuthenticationError(),
        ]);
    }

    public function register(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $hashedPassword = $this->userPasswordHasher->hashPassword($user, $user->getPlainPassword());
            $user->setPassword($hashedPassword);

            $user->setConfirmationToken($this->tokenGenerator->generateToken());
            
            $this->entityManager->persist($user);
            $this->entityManager->flush();

            $userRegisterEvent = new UserRegisterEvent($user);

            $this->eventDispatcher->dispatch($userRegisterEvent, UserRegisterEvent::NAME);
    
            return $this->redirectToRoute('posts');           
        }
        return $this->render('auth/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }   
    
    public function logout()
    {

    }

    public function confirm(Request $request)
    {

        $token = $request->get("token");     
        
        $user = $this->userRepository->findOneBy(['confirmationToken' => $token]);

        if ($user instanceof User) {
            $user->setIsEnabled(true);
            
            $user->setConfirmationToken("");

            $this->entityManager->flush();
        }

        return $this->render('auth/confirmation.html.twig', [
            'user' => $user,
        ]);
    }
}