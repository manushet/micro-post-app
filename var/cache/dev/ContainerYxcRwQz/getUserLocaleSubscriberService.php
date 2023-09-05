<?php

namespace ContainerYxcRwQz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserLocaleSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Event\UserLocaleSubscriber' shared autowired service.
     *
     * @return \App\Event\UserLocaleSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Event/UserLocaleSubscriber.php';

        return $container->privates['App\\Event\\UserLocaleSubscriber'] = new \App\Event\UserLocaleSubscriber(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}