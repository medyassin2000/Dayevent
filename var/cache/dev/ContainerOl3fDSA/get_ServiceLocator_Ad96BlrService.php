<?php

namespace ContainerOl3fDSA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ad96BlrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ad96Blr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ad96Blr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commentaireRec' => ['privates', '.errored..service_locator.Ad96Blr.App\\Entity\\CommentaireRec', NULL, 'Cannot autowire service ".service_locator.Ad96Blr": it references class "App\\Entity\\CommentaireRec" but no such service exists.'],
        ], [
            'commentaireRec' => 'App\\Entity\\CommentaireRec',
        ]);
    }
}
