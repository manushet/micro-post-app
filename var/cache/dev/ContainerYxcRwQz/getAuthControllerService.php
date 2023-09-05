<?php

namespace ContainerYxcRwQz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AuthController' shared autowired service.
     *
     * @return \App\Controller\AuthController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AuthController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationUtils.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenGenerator/TokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Security/TokenGenerator.php';

        $container->services['App\\Controller\\AuthController'] = $instance = new \App\Controller\AuthController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)), ($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')), new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack())), new \App\Security\TokenGenerator(), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\AuthController', $container));

        return $instance;
    }
}
