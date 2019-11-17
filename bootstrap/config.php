<?php

use Application\Controllers\HomeController;

return [
    HomeController::class => function () {
        return new HomeController;
    },
];
