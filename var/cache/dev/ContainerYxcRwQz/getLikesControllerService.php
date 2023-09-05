<?php

namespace ContainerYxcRwQz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLikesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LikesController' shared autowired service.
     *
     * @return \App\Controller\LikesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LikesController.php';

        $container->services['App\\Controller\\LikesController'] = $instance = new \App\Controller\LikesController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\LikesController', $container));

        return $instance;
    }
}
