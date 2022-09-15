<?php

$factory = new ControllerFactory();
$controller = $factory->getController($_GET['route'] ?? '/');
$controller->run();

$userSubscriber = new Subscriber(function (User $user){
    echo json_encode($user, JSON_PRETTY_PRINT);
}, true);