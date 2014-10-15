<?php

use Doctrine\Common\ClassLoader,
    Doctrine\ORM\Tools\Setup,
    Doctrine\ORM\EntityManager;

class Doctrine
{
    private $em;

    public function __construct()
    {
    	$app_path = getcwd()."/application/";
        // Load the database configuration from CodeIgniter
        require APPPATH . 'config/database.php';
        
        $connection_options = array(
            'driver'        => 'pdo_mysql',
            'user'          => $db['default']['username'],
            'password'      => $db['default']['password'],
            'host'          => $db['default']['hostname'],
            'dbname'        => $db['default']['database'],
            'charset'       => $db['default']['char_set'],
            'driverOptions' => array(
            	'charset'   => $db['default']['char_set'],
            ),
        );

        // With this configuration, your model files need to be in application/models/Entity
        // e.g. Creating a new Entity\User loads the class from application/models/Entity/User.php
        $entity_path = $app_path. 'models/entities';

        // Set $dev_mode to TRUE to disable caching while you develop
        $isDevMode = true;
        $config = Setup::createAnnotationMetadataConfiguration(array($entity_path), $isDevMode);
        
        $driver = $config->newDefaultAnnotationDriver(
        		APPPATH . '/models/entities', false
        );
        
        
        $this->em = EntityManager::create($connection_options, $config);

//         $driver = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($entity_path);
        $this->em->getConfiguration()->setMetadataDriverImpl($driver);
    }
    
    public function getEntityManager() {
    	return $this->em;
    }
}