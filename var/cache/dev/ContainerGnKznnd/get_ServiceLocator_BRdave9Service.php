<?php

namespace ContainerGnKznnd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BRdave9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bRdave9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bRdave9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'response' => ['privates', '.errored..service_locator.bRdave9.Symfony\\Component\\HttpFoundation\\Response', NULL, 'Cannot autowire service ".service_locator.bRdave9": it references class "Symfony\\Component\\HttpFoundation\\Response" but no such service exists.'],
        ], [
            'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ]);
    }
}
