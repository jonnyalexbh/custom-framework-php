<?php

require __DIR__ . '/../vendor/autoload.php';
$containerBuilder = new \DI\ContainerBuilder;
$containerBuilder->useAutowiring(false);
$containerBuilder->addDefinitions(base_path('bootstrap/config.php'));

// Kint::dump($containerBuilder);

try {
    $container = $containerBuilder->build();
    return $container;
} catch (Exception $e) {
}


