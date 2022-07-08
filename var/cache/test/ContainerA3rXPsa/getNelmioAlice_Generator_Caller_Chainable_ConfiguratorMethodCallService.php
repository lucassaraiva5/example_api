<?php

namespace ContainerA3rXPsa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Caller_Chainable_ConfiguratorMethodCallService extends App_KernelTestContainer
{
    /*
     * Gets the private 'nelmio_alice.generator.caller.chainable.configurator_method_call' shared service.
     *
     * @return \Nelmio\Alice\Generator\Caller\Chainable\ConfiguratorMethodCallProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/CallProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/ChainableCallProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/CallProcessorAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/Chainable/ConfiguratorMethodCallProcessor.php';

        return $container->privates['nelmio_alice.generator.caller.chainable.configurator_method_call'] = new \Nelmio\Alice\Generator\Caller\Chainable\ConfiguratorMethodCallProcessor();
    }
}
