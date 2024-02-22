<?php

namespace ContainerXXN8xUx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_UserValueResolverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.user_value_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Http\Controller\UserValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Controller/UserValueResolver.php';

        return $container->privates['security.user_value_resolver'] = new \Symfony\Component\Security\Http\Controller\UserValueResolver(($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)));
    }
}
