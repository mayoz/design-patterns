<?php

include __DIR__ .'/../../../vendor/autoload.php';

use DesignPatterns\Creational\SimpleFactory\SocialMediaFactory;

$factory = new SocialMediaFactory();

$network = $factory->make('twitter');

$messages = $network->feed(3);

var_dump($messages);
