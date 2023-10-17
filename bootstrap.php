<?php

// bootstrap.php
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\ORMSetup;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$modelsFolder = "/src/models";
$isDevMode = true;

$config = ORMSetup::createAttributeMetadataConfiguration(array(__DIR__.$modelsFolder), $isDevMode);

// database configuration parameters
// $conn = array(
//     'driver'   => 'pdo_mysql',
//     'user'     => 'root',
//     'password' => '',
//     'dbname'   => 'btb-project',
//     'host'     => '127.0.0.1'
// );

// TOOD: setup to work with mySQL
$conn = DriverManager::getConnection([
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
], $config);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
