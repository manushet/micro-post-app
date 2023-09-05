<?php

namespace App\Event;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Http\SecurityEvents;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class UserLocaleSubscriber implements EventSubscriberInterface
{
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }
       
    public static function getSubscribedEvents() 
    {
        return [
            SecurityEvents::INTERACTIVE_LOGIN => [
                ['onInteractiveLogin', 15]
            ]
        ];
    }

    public function onInteractiveLogin(InteractiveLoginEvent $event) 
    {
        /**
         * @var User $user
         */
        $user = $event->getAuthenticationToken()->getUser();

        $this->requestStack->getSession()->set('_locale', $user->getPreferences()->getLocale());
    }    
}