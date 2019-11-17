<?php

use Application\Controllers\HomeController;

return [
    'config.database' => function () {
        return parse_ini_file(base_path('app/Config/database.ini'));
    },
    HomeController::class => function () {
        return new HomeController;
    },
];
