<?php


namespace App\Controller;

use App\Entity\Notification;
use App\Entity\User;
use App\Repository\NotificationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted(User::ROLE_USER)]
class NotificationController extends AbstractController
{
    private $entityManager;

    private $notificationRepository;

    public function __construct(EntityManagerInterface $entityManager, NotificationRepository $notificationRepository)
    {
        $this->entityManager = $entityManager;
        $this->notificationRepository = $notificationRepository;
    }
    
    /**
     * Get unread notifications quantity
     *
     * @var User $currentUser
     * @return JsonResponse
     */
    public function unreadCount(): JsonResponse
    {
        $currentUser = $this->getUser();
       
        return new JsonResponse(
            [
                'count' => $this->notificationRepository->findUnseenByUser($currentUser),
            ], 
            Response::HTTP_OK
        );      
    }

    public function notifications(): Response
    {
        $notifications = $this->notificationRepository->findBy([
            'isSeen' => false,
            'user' => $this->getUser(),
        ]);
       
        return $this->render('notifications/notifications.html.twig', [
            'notifications' => $notifications,
        ]);   
    }  
    
    public function markAsRead(Notification $notification): RedirectResponse
    {
        
        $notification->setIsSeen(true);

        $this->entityManager->persist($notification);
        $this->entityManager->flush();

        //dump($notification);
        //die();        

        return $this->redirectToRoute('notification_view');   
    }   

    public function markAllAsRead(): RedirectResponse
    {
        
        $this->notificationRepository->markAllAsReadByUser($this->getUser());
        
        $this->entityManager->flush();

        return $this->redirectToRoute('notification_view');   
    }   
    
}