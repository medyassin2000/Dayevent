<?php

namespace ContainerOl3fDSA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStatistiqueServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\StatistiqueService' shared autowired service.
     *
     * @return \App\Service\StatistiqueService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'StatistiqueService.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['App\\Service\\StatistiqueService'])) {
            return $container->privates['App\\Service\\StatistiqueService'];
        }

        return $container->privates['App\\Service\\StatistiqueService'] = new \App\Service\StatistiqueService($a);
    }
}
