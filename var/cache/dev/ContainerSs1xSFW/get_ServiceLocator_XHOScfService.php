<?php

namespace ContainerSs1xSFW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XHOScfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.x_hOScf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.x_hOScf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'userToUnFollow' => ['privates', '.errored..service_locator.x_hOScf.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.x_hOScf": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
        ], [
            'userToUnFollow' => 'App\\Entity\\User',
        ]);
    }
}
