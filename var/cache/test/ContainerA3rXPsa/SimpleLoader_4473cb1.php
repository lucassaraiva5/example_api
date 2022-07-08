<?php

namespace ContainerA3rXPsa;

include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Loader/SimpleLoader.php';
class SimpleLoader_4473cb1 extends \Fidry\AliceDataFixtures\Loader\SimpleLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderc8129 = null;
    private $initializer45ff4 = null;
    private static $publicProperties0983a = [
        
    ];
    public function load(array $fixturesFiles, array $parameters = [], array $objects = [], ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null) : array
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'load', array('fixturesFiles' => $fixturesFiles, 'parameters' => $parameters, 'objects' => $objects, 'purgeMode' => $purgeMode), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;
        return $this->valueHolderc8129->load($fixturesFiles, $parameters, $objects, $purgeMode);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->filesLoader, $instance->logger);
        }, $instance, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($instance);
        $instance->initializer45ff4 = $initializer;
        return $instance;
    }
    public function __construct(\Nelmio\Alice\FilesLoaderInterface $fileLoader, ?\Psr\Log\LoggerInterface $logger = null)
    {
        static $reflection;
        if (! $this->valueHolderc8129) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\SimpleLoader');
            $this->valueHolderc8129 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->filesLoader, $instance->logger);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($this);
        }
        $this->valueHolderc8129->__construct($fileLoader, $logger);
    }
    public function & __get($name)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, '__get', ['name' => $name], $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;
        if (isset(self::$publicProperties0983a[$name])) {
            return $this->valueHolderc8129->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\SimpleLoader');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8129;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderc8129;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;
        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\SimpleLoader');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8129;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderc8129;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, '__isset', array('name' => $name), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;
        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\SimpleLoader');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8129;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderc8129;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, '__unset', array('name' => $name), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;
        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\SimpleLoader');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8129;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderc8129;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, '__clone', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;
        $this->valueHolderc8129 = clone $this->valueHolderc8129;
    }
    public function __sleep()
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, '__sleep', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;
        return array('valueHolderc8129');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->filesLoader, $instance->logger);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer45ff4 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer45ff4;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'initializeProxy', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc8129;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc8129;
    }
}

if (!\class_exists('SimpleLoader_4473cb1', false)) {
    \class_alias(__NAMESPACE__.'\\SimpleLoader_4473cb1', 'SimpleLoader_4473cb1', false);
}
