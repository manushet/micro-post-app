<?php


namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted(User::ROLE_USER)]
class FollowingController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    public function follow(User $userToFollow) 
    {
        $currentUser = $this->getUser();

        //dump($currentUser);

        if ($currentUser->getId() == $userToFollow->getId()) {
            return new Response("You can`t follow to yourself", Response::HTTP_METHOD_NOT_ALLOWED);
        }

        if (!$currentUser->hasFollowing($userToFollow)) {
            
            $currentUser->addFollowing($userToFollow);
            
            $this->entityManager->flush();
            
            return $this->redirectToRoute(
                'user_posts', 
                ['username' => $userToFollow->getUsername()]
            );
        }
        else {
            return new Response("You already follow this user", Response::HTTP_METHOD_NOT_ALLOWED);
        }

    }

    public function unfollow(User $userToUnFollow) 
    {
        $currentUser = $this->getUser();

        $currentUser->removeFollowing($userToUnFollow);

        $this->entityManager->flush();

        return $this->redirectToRoute(
            'user_posts', 
            ['username' => $userToUnFollow->getUsername()]
        );
    }    

}