<?php

namespace ContainerA3rXPsa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_RouteDescribers_RouteMetadataService extends App_KernelTestContainer
{
    /*
     * Gets the private 'nelmio_api_doc.route_describers.route_metadata' shared service.
     *
     * @return \Nelmio\ApiDocBundle\RouteDescriber\RouteMetadataDescriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/RouteDescriber/RouteDescriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/RouteDescriber/RouteDescriberTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/RouteDescriber/RouteMetadataDescriber.php';

        return $container->privates['nelmio_api_doc.route_describers.route_metadata'] = new \Nelmio\ApiDocBundle\RouteDescriber\RouteMetadataDescriber();
    }
}
