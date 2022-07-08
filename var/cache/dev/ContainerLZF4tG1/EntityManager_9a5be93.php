<?php

namespace ContainerLZF4tG1;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc8129 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer45ff4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0983a = [
        
    ];

    public function getConnection()
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'getConnection', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'getMetadataFactory', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'getExpressionBuilder', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'beginTransaction', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'getCache', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->getCache();
    }

    public function transactional($func)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'transactional', array('func' => $func), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'wrapInTransaction', array('func' => $func), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'commit', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->commit();
    }

    public function rollback()
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'rollback', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'getClassMetadata', array('className' => $className), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'createQuery', array('dql' => $dql), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'createNamedQuery', array('name' => $name), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'createQueryBuilder', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'flush', array('entity' => $entity), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'clear', array('entityName' => $entityName), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->clear($entityName);
    }

    public function close()
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'close', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->close();
    }

    public function persist($entity)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'persist', array('entity' => $entity), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'remove', array('entity' => $entity), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'refresh', array('entity' => $entity), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'detach', array('entity' => $entity), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'merge', array('entity' => $entity), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'getRepository', array('entityName' => $entityName), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'contains', array('entity' => $entity), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'getEventManager', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'getConfiguration', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'isOpen', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'getUnitOfWork', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'getProxyFactory', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'initializeObject', array('obj' => $obj), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'getFilters', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'isFiltersStateClean', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, 'hasFilters', array(), $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        return $this->valueHolderc8129->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer45ff4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc8129) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc8129 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc8129->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer45ff4 && ($this->initializer45ff4->__invoke($valueHolderc8129, $this, '__get', ['name' => $name], $this->initializer45ff4) || 1) && $this->valueHolderc8129 = $valueHolderc8129;

        if (isset(self::$publicProperties0983a[$name])) {
            return $this->valueHolderc8129->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
