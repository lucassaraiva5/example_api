<?php

namespace ContainerDJLgvcy;

include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5a058 = null;
    private $initializer6c9be = null;
    private static $publicProperties8aeee = [
        
    ];
    public function getConnection()
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'getConnection', array(), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'getMetadataFactory', array(), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'getExpressionBuilder', array(), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'beginTransaction', array(), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'getCache', array(), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->getCache();
    }
    public function transactional($func)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'transactional', array('func' => $func), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'commit', array(), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->commit();
    }
    public function rollback()
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'rollback', array(), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'getClassMetadata', array('className' => $className), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'createQuery', array('dql' => $dql), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'createNamedQuery', array('name' => $name), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'createQueryBuilder', array(), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'flush', array('entity' => $entity), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'clear', array('entityName' => $entityName), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->clear($entityName);
    }
    public function close()
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'close', array(), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->close();
    }
    public function persist($entity)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'persist', array('entity' => $entity), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'remove', array('entity' => $entity), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'refresh', array('entity' => $entity), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'detach', array('entity' => $entity), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'merge', array('entity' => $entity), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'contains', array('entity' => $entity), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'getEventManager', array(), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'getConfiguration', array(), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'isOpen', array(), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'getUnitOfWork', array(), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'getProxyFactory', array(), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'initializeObject', array('obj' => $obj), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'getFilters', array(), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'isFiltersStateClean', array(), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'hasFilters', array(), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return $this->valueHolder5a058->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer6c9be = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder5a058) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5a058 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder5a058->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, '__get', ['name' => $name], $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        if (isset(self::$publicProperties8aeee[$name])) {
            return $this->valueHolder5a058->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a058;
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
        $targetObject = $this->valueHolder5a058;
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
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a058;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder5a058;
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
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, '__isset', array('name' => $name), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a058;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder5a058;
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
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, '__unset', array('name' => $name), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a058;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5a058;
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
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, '__clone', array(), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        $this->valueHolder5a058 = clone $this->valueHolder5a058;
    }
    public function __sleep()
    {
        $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, '__sleep', array(), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
        return array('valueHolder5a058');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6c9be = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6c9be;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer6c9be && ($this->initializer6c9be->__invoke($valueHolder5a058, $this, 'initializeProxy', array(), $this->initializer6c9be) || 1) && $this->valueHolder5a058 = $valueHolder5a058;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a058;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a058;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
