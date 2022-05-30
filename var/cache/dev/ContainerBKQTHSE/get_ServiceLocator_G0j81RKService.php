<?php

namespace ContainerBKQTHSE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G0j81RKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.G0j81RK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.G0j81RK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\DashboardController::index' => ['privates', '.service_locator.B1RE8iE', 'get_ServiceLocator_B1RE8iEService', true],
            'App\\Controller\\ListeController::create' => ['privates', '.service_locator.aIvvw8v', 'get_ServiceLocator_AIvvw8vService', true],
            'App\\Controller\\ListeController::delete' => ['privates', '.service_locator.uFNXYsW', 'get_ServiceLocator_UFNXYsWService', true],
            'App\\Controller\\ListeController::listDetail' => ['privates', '.service_locator.B1RE8iE', 'get_ServiceLocator_B1RE8iEService', true],
            'App\\Controller\\LoginController::index' => ['privates', '.service_locator._Tg1sQT', 'get_ServiceLocator_Tg1sQTService', true],
            'App\\Controller\\LoginController::logout' => ['privates', '.service_locator.dbFJ5zg', 'get_ServiceLocator_DbFJ5zgService', true],
            'App\\Controller\\TachesController::create' => ['privates', '.service_locator.LjCpe4e', 'get_ServiceLocator_LjCpe4eService', true],
            'App\\Controller\\TachesController::delete' => ['privates', '.service_locator.s.8Pk7m', 'get_ServiceLocator_S_8Pk7mService', true],
            'App\\Controller\\TachesController::update' => ['privates', '.service_locator.s.8Pk7m', 'get_ServiceLocator_S_8Pk7mService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\DashboardController:index' => ['privates', '.service_locator.B1RE8iE', 'get_ServiceLocator_B1RE8iEService', true],
            'App\\Controller\\ListeController:create' => ['privates', '.service_locator.aIvvw8v', 'get_ServiceLocator_AIvvw8vService', true],
            'App\\Controller\\ListeController:delete' => ['privates', '.service_locator.uFNXYsW', 'get_ServiceLocator_UFNXYsWService', true],
            'App\\Controller\\ListeController:listDetail' => ['privates', '.service_locator.B1RE8iE', 'get_ServiceLocator_B1RE8iEService', true],
            'App\\Controller\\LoginController:index' => ['privates', '.service_locator._Tg1sQT', 'get_ServiceLocator_Tg1sQTService', true],
            'App\\Controller\\LoginController:logout' => ['privates', '.service_locator.dbFJ5zg', 'get_ServiceLocator_DbFJ5zgService', true],
            'App\\Controller\\TachesController:create' => ['privates', '.service_locator.LjCpe4e', 'get_ServiceLocator_LjCpe4eService', true],
            'App\\Controller\\TachesController:delete' => ['privates', '.service_locator.s.8Pk7m', 'get_ServiceLocator_S_8Pk7mService', true],
            'App\\Controller\\TachesController:update' => ['privates', '.service_locator.s.8Pk7m', 'get_ServiceLocator_S_8Pk7mService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\DashboardController::index' => '?',
            'App\\Controller\\ListeController::create' => '?',
            'App\\Controller\\ListeController::delete' => '?',
            'App\\Controller\\ListeController::listDetail' => '?',
            'App\\Controller\\LoginController::index' => '?',
            'App\\Controller\\LoginController::logout' => '?',
            'App\\Controller\\TachesController::create' => '?',
            'App\\Controller\\TachesController::delete' => '?',
            'App\\Controller\\TachesController::update' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\DashboardController:index' => '?',
            'App\\Controller\\ListeController:create' => '?',
            'App\\Controller\\ListeController:delete' => '?',
            'App\\Controller\\ListeController:listDetail' => '?',
            'App\\Controller\\LoginController:index' => '?',
            'App\\Controller\\LoginController:logout' => '?',
            'App\\Controller\\TachesController:create' => '?',
            'App\\Controller\\TachesController:delete' => '?',
            'App\\Controller\\TachesController:update' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}