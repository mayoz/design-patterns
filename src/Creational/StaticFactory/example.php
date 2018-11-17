<?php

include __DIR__ .'/../../../vendor/autoload.php';

use DesignPatterns\Creational\StaticFactory\SocialMediaFactory;

$network = SocialMediaFactory::make('twitter');

$messages = $network->feed(3);

var_dump($messages);
