<?php

namespace Raisen\Doctrine\ORM;

use Doctrine\Common\EventManager,
        Doctrine\DBAL\Configuration,
        Doctrine\ORM\EntityManager,
        Zend\Registry;

/**
 * @author Raisen
 */
class EntityManagerRegistry extends Registry {
    private static $registryClassName = 'Raisen\\Doctrine\\ORM\\EntityManagerRegistry';
    
    public static function create($id, $conn, Configuration $config, EventManager $eventManager = null) {
        static::set((string) $id, EntityManager::create($conn, $config, $eventManager));
    }
    
    /**
     * @param string $index - get the value associated with $index
     * @return EntityManager
     */
    public static function get($index = 'default') {return parent::get($index);}

    /**
     * @param string $index
     * @param EntityManager $value 
     */
    public static function set($index, EntityManager $value){parent::set($index, $value);}
}

?>