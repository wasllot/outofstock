<?php

$dashboard = new Dashboard();

$router = new \Bramus\Router\Router();

$router->get('/test', function() { echo 'HOLA!'; });

$router->get('/', function(){

	global $dashboard;
	$dashboard->welcome();
});

$router->get('/dashboard/(\d+)/(\d+)/(\d+)', function($day, $month, $year) {
    $date = $year."-".$month."-".$day;

    global $dashboard;

	$dashboard->load_dashboard($date);
});

$router->get('/check-urls', function(){

	global $dashboard;
	$dashboard->check_urls();
});


$router->run();