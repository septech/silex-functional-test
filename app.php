<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

/**
* Production code here
* Main routing, just return Hello World
*/
$app->get('/', function() {
	return 'Hello World, SepTech!';
});

return $app;