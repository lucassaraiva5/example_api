<?php

namespace ContainerTKgbzkI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMovieControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MovieController' shared autowired service.
     *
     * @return \App\Controller\MovieController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/MovieController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/BaseService.php';
        include_once \dirname(__DIR__, 4).'/src/Service/MovieService.php';

        $container->services['App\\Controller\\MovieController'] = $instance = new \App\Controller\MovieController(new \App\Service\MovieService(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService'))), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\MovieController', $container));

        return $instance;
    }
}
