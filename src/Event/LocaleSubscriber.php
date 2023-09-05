<?php

namespace App\Event;

use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class LocaleSubscriber implements EventSubscriberInterface
{
    private $defaultLocale;
    
    public function __construct($defaultLocale = 'en')
    {
        $this->defaultLocale = $defaultLocale;
    }
    
    public static function getSubscribedEvents() 
    {
        return [
            KernelEvents::REQUEST => [
                ['onKernelRequest', 20]
            ]
        ];
    }

    public function onKernelRequest(RequestEvent $event) 
    {       
        $request = $event->getRequest();

        if (!$request->hasPreviousSession()) {
            return;
        }

        if ($locale = $request->attributes->get('_locale')) {
            $request->getSession()->set('_locale', $locale);
        }
        else {
            $locale = $request->getSession()->get('_locale', $this->defaultLocale);
            $request->setLocale($locale);
        }
    }  
}