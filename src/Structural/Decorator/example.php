<?php

include __DIR__ .'/../../../vendor/autoload.php';

use DesignPatterns\Structural\Decorator\RenderXml;
use DesignPatterns\Structural\Decorator\Decorator;
use DesignPatterns\Structural\Decorator\RenderJson;
use DesignPatterns\Structural\Decorator\PostService;

$service = new PostService([
    'id' => 1,
    'name' => 'John Doe',
]);

echo $service->render() ."\n\n";

/*
1,John Doe
*/

$renderJson = new RenderJson($service);

echo $renderJson->render() ."\n\n";

/*
{"id":1,"name":"John Doe"}
*/

$renderXml = new RenderXml($service);

echo $renderXml->render() ."\n\n";;

/*
<?xml version="1.0" encoding="utf-8"?>
<id>1</id>
<name>John Doe</name>
*/
