<?php

class ControllerFactory
{

    public function getController(string $route): Controller{
        return match ($route) {
            '/' => new HomeController(new PaymentsFacade()),
            default => new ErrorController(),
        };
    }

}