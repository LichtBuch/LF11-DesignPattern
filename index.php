<?php

include_once __DIR__ . '/vendor/autoload.php';

use DesignPatterns\Factory\ControllerFactory;



$factory = new ControllerFactory();
$controller = $factory->getController($_GET['route'] ?? '');
$controller->run();