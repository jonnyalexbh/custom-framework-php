<?php

require __DIR__ . '/../vendor/autoload.php';
$containerBuilder = new \DI\ContainerBuilder;
$containerBuilder->useAutowiring(true);
$containerBuilder->addDefinitions(__DIR__ . '../bootstrap/config.php');

// Kint::dump($containerBuilder);

try {
    $container = $containerBuilder->build();
    return $container;
} catch (Exception $e) {
}


