<?php

return \FastRoute\simpleDispatcher( function ( \FastRoute\RouteCollector $route ) {
	$route->addRoute( 'GET', '/', ['Application\Controllers\HomeController', 'index']);
});
