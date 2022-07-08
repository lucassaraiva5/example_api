<?php

namespace ContainerA3rXPsa;

include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Bridge/Doctrine/Persister/ObjectManagerPersister.php';
class ObjectManagerPersister_eccc052 extends \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderc8129 = null;
    private $initializer45ff4 = null;
    private static $publicProperties0983a = [
        
    ];
    public function persist($object)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'persist', array('object' => $object), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;
        return $this->valueHolderc8129->persist($object);
    }
    public function flush()
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'flush', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;
        return $this->valueHolderc8129->flush();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadataToRestore);
        }, $instance, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($instance);
        $instance->initializer45ff4 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\Persistence\ObjectManager $manager)
    {
        static $reflection;
        if (! $this->valueHolderc8129) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');
            $this->valueHolderc8129 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadataToRestore);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($this);
        }
        $this->valueHolderc8129->__construct($manager);
    }
    public function & __get($name)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, '__get', ['name' => $name], $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;
        if (isset(self::$publicProperties0983a[$name])) {
            return $this->valueHolderc8129->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');
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
        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');
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
        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');
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
        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');
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
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadataToRestore);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($this);
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

if (!\class_exists('ObjectManagerPersister_eccc052', false)) {
    \class_alias(__NAMESPACE__.'\\ObjectManagerPersister_eccc052', 'ObjectManagerPersister_eccc052', false);
}
