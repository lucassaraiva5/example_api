<?php

namespace ContainerA3rXPsa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_StringParserService extends App_KernelTestContainer
{
    /*
     * Gets the private 'nelmio_alice.fixture_builder.expression_language.parser.string_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\StringMergerParser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/ParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/StringMergerParser.php';

        return $container->privates['nelmio_alice.fixture_builder.expression_language.parser.string_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\StringMergerParser(($container->privates['nelmio_alice.fixture_builder.expression_language.parser.simple_parser'] ?? $container->load('getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_SimpleParserService')));
    }
}
