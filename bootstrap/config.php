<?php

use Application\Controllers\HomeController;
use Application\Providers\Doctrine;

return [
    'config.database' => function () {
        return parse_ini_file(base_path('app/Config/database.ini'));
    },
    HomeController::class => function () {
        return new HomeController;
    },
    Doctrine::class => function (\Psr\Container\ContainerInterface $container) {
      return new Doctrine($container);
    },
];
