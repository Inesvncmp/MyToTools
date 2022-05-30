<?php

namespace ContainerBKQTHSE;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc3ae8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdbe36 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5e2d0 = [
        
    ];

    public function getConnection()
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'getConnection', array(), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'getMetadataFactory', array(), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'getExpressionBuilder', array(), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'beginTransaction', array(), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'getCache', array(), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'transactional', array('func' => $func), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'commit', array(), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->commit();
    }

    public function rollback()
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'rollback', array(), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'getClassMetadata', array('className' => $className), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'createQuery', array('dql' => $dql), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'createNamedQuery', array('name' => $name), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'createQueryBuilder', array(), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'flush', array('entity' => $entity), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'clear', array('entityName' => $entityName), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->clear($entityName);
    }

    public function close()
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'close', array(), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->close();
    }

    public function persist($entity)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'persist', array('entity' => $entity), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'remove', array('entity' => $entity), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'refresh', array('entity' => $entity), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'detach', array('entity' => $entity), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'merge', array('entity' => $entity), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'contains', array('entity' => $entity), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'getEventManager', array(), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'getConfiguration', array(), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'isOpen', array(), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'getUnitOfWork', array(), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'getProxyFactory', array(), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'initializeObject', array('obj' => $obj), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'getFilters', array(), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'isFiltersStateClean', array(), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'hasFilters', array(), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return $this->valueHolderc3ae8->hasFilters();
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

        $instance->initializerdbe36 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc3ae8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc3ae8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc3ae8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, '__get', ['name' => $name], $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        if (isset(self::$publicProperties5e2d0[$name])) {
            return $this->valueHolderc3ae8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc3ae8;

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

        $targetObject = $this->valueHolderc3ae8;
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
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc3ae8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc3ae8;
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
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, '__isset', array('name' => $name), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc3ae8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc3ae8;
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
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, '__unset', array('name' => $name), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc3ae8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc3ae8;
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
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, '__clone', array(), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        $this->valueHolderc3ae8 = clone $this->valueHolderc3ae8;
    }

    public function __sleep()
    {
        $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, '__sleep', array(), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;

        return array('valueHolderc3ae8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdbe36 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdbe36;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdbe36 && ($this->initializerdbe36->__invoke($valueHolderc3ae8, $this, 'initializeProxy', array(), $this->initializerdbe36) || 1) && $this->valueHolderc3ae8 = $valueHolderc3ae8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc3ae8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc3ae8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
