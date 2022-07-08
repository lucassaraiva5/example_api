<?php

namespace ContainerA3rXPsa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Resolver_ParameterBag_SimpleService extends App_KernelTestContainer
{
    /*
     * Gets the private 'nelmio_alice.generator.resolver.parameter_bag.simple' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Parameter\SimpleParameterBagResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/ParameterBagResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Parameter/SimpleParameterBagResolver.php';

        return $container->privates['nelmio_alice.generator.resolver.parameter_bag.simple'] = new \Nelmio\Alice\Generator\Resolver\Parameter\SimpleParameterBagResolver(($container->privates['nelmio_alice.generator.resolver.parameter.registry'] ?? $container->load('getNelmioAlice_Generator_Resolver_Parameter_RegistryService')));
    }
}
