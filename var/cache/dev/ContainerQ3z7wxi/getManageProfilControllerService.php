<?php

namespace ContainerQ3z7wxi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getManageProfilControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ManageProfilController' shared autowired service.
     *
     * @return \App\Controller\ManageProfilController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ManageProfilController.php';

        $container->services['App\\Controller\\ManageProfilController'] = $instance = new \App\Controller\ManageProfilController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\ManageProfilController', $container));

        return $instance;
    }
}