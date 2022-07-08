<?php

namespace ContainerA3rXPsa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Instantiator_Chainable_NoCallerMethodInstantiatorService extends App_KernelTestContainer
{
    /*
     * Gets the private 'nelmio_alice.generator.instantiator.chainable.no_caller_method_instantiator' shared service.
     *
     * @return \Nelmio\Alice\Generator\Instantiator\Chainable\NoCallerMethodCallInstantiator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/InstantiatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/ChainableInstantiatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/AbstractChainableInstantiator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/NoCallerMethodCallInstantiator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/NamedArgumentsResolver.php';

        return $container->privates['nelmio_alice.generator.instantiator.chainable.no_caller_method_instantiator'] = new \Nelmio\Alice\Generator\Instantiator\Chainable\NoCallerMethodCallInstantiator(($container->privates['nelmio_alice.generator.named_arguments_resolver'] ?? ($container->privates['nelmio_alice.generator.named_arguments_resolver'] = new \Nelmio\Alice\Generator\NamedArgumentsResolver())));
    }
}
