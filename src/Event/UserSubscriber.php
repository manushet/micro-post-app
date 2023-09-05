<?php

namespace App\Event;
use App\Entity\UserPreferences;
use App\Service\Mailer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;


class UserSubscriber implements EventSubscriberInterface
{
    
    /**
     * @var Mailer
    */
    private $mailer;
    private $entityManager;
    private $defaultLocale;

    public function __construct(
        Mailer $mailer, 
        EntityManagerInterface $entityManager, 
        string $defaultLocale)
    {
        $this->mailer = $mailer;
        $this->entityManager = $entityManager;
        $this->defaultLocale = $defaultLocale;
    }

    public static function getSubscribedEvents() 
    {
        return [
            UserRegisterEvent::NAME => 'onUserRegister'
        ];
    }

    public function onUserRegister(UserRegisterEvent $event) 
    {       
        $preferences = new UserPreferences();
        $preferences->setLocale($this->defaultLocale);

        $user = $event->getRegisteredUser();
        $user->setPreferences($preferences);
        $this->entityManager->flush();

        $this->mailer->sendOnRegisterEmail($event->getRegisteredUser());
    }
}