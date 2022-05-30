<?php

namespace ContainerBKQTHSE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AIvvw8vService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aIvvw8v' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aIvvw8v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'registry' => ['services', 'doctrine', 'getDoctrineService', false],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'registry' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}