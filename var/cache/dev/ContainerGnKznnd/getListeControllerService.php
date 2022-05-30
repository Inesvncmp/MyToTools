<?php

namespace ContainerGnKznnd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ListeController' shared autowired service.
     *
     * @return \App\Controller\ListeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ListeController.php';

        $container->services['App\\Controller\\ListeController'] = $instance = new \App\Controller\ListeController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\ListeController', $container));

        return $instance;
    }
}
