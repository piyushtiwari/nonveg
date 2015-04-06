<?php
/* use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once 'index.php'; // <------- what should i add here?
//require_once "vendor/autoload.php";


// replace with mechanism to retrieve EntityManager in your app
$ci = &get_instance();
$entityManager = $ci->doctrine->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager); */


require_once "vendor/autoload.php";

define('ENVIRONMENT', 'dev');
define('APPPATH', 'application/');
define('BASEPATH', './');
define('FCPATH', './');

require APPPATH . 'libraries/doctrine.php';

$doctrine = new Doctrine();

$entityManager = $doctrine->getEntityManager();

// $helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
// 		'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($entityManager->getConnection()),
// 		'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($entityManager)
// ));

// $helperSet = ($helperSet) ?: new \Symfony\Component\Console\Helper\HelperSet();

// \Doctrine\ORM\Tools\Console\ConsoleRunner::run($helperSet);


use Doctrine\ORM\Tools\Console\ConsoleRunner;

return ConsoleRunner::createHelperSet($entityManager);