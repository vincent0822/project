<?php
namespace fastphp\entity;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class Entity
{
    public static function getEntityManager()
    {
        $isDevMoe = true;
        $config =  Setup::createAnnotationMetadataConfiguration(array(__DIR__ . '/dorm'), $isDevMoe);
        $conn = array(
            'driver' => 'pdo_mysql',
            'user'     => 'root',
            'password' => 'mysql',
            'dbname'   => 'project',
        );

        return EntityManager::create($conn, $config);
    }
}