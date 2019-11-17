<?php

namespace Application\Providers;

use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Psr\Container\ContainerInterface;

class Doctrine
{
    public $em;

    public function __construct(ContainerInterface $container)
    {
        $dbConfig = $container->get('config.database');

        $paths = [
            base_path('app/Models/Entities'),
            base_path('app/Models/Repositories'),
        ];

        $isDevMode = true;

        $config = Setup::createAnnotationMetadataConfiguration(
            $paths, $isDevMode, null, null, false
        );

        AnnotationRegistry::registerLoader('class_exists');

        $this->em = EntityManager::create($dbConfig, $config);
    }

}
