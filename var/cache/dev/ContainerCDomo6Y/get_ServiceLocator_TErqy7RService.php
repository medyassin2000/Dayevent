<?php

namespace ContainerCDomo6Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TErqy7RService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TErqy7R' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TErqy7R'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commandeTicket' => ['privates', '.errored..service_locator.TErqy7R.App\\Entity\\CommandeTicket', NULL, 'Cannot autowire service ".service_locator.TErqy7R": it references class "App\\Entity\\CommandeTicket" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'commandeTicket' => 'App\\Entity\\CommandeTicket',
            'entityManager' => '?',
        ]);
    }
}
