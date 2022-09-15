<?php

namespace DesignPatterns\Factory;

use DesignPatterns\Controller\Controller;
use DesignPatterns\Controller\ErrorController;
use DesignPatterns\Controller\HomeController;
use DesignPatterns\Controller\UserController;
use DesignPatterns\Facade\PaymentsFacade;
use DesignPatterns\Model\UserRepository;

class ControllerFactory
{

    public function getController(string $route): Controller
    {
        return match ($route){
            'home' => new HomeController(new PaymentsFacade()),
            'user' => new UserController(new UserRepository()),
            default => new ErrorController(),
        };
    }

}