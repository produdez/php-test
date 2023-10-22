<?php

// bootstrap.php
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\ORMSetup;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$modelsFolder = "/src/models";
$isDevMode = true;

$config = ORMSetup::createAttributeMetadataConfiguration(array(__DIR__ . $modelsFolder), $isDevMode);

// database configuration parameters
// TODO: change database and configs later in the dev process
$conn = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'test',
    'host'     => '127.0.0.1'
);

// obtaining the entity manager
// TODO: update to non-deprecated code
$entityManager = EntityManager::create($conn, $config);
