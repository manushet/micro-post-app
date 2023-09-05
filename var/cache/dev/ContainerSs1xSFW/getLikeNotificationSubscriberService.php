<?php

namespace ContainerSs1xSFW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLikeNotificationSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventListener\LikeNotificationSubscriber' shared autowired service.
     *
     * @return \App\EventListener\LikeNotificationSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/src/EventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/src/EventListener/LikeNotificationSubscriber.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['App\\EventListener\\LikeNotificationSubscriber'])) {
            return $container->privates['App\\EventListener\\LikeNotificationSubscriber'];
        }

        return $container->privates['App\\EventListener\\LikeNotificationSubscriber'] = new \App\EventListener\LikeNotificationSubscriber($a);
    }
}
