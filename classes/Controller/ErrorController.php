<?php

namespace DesignPatterns\Controller;

class ErrorController extends Controller
{

    public function __construct()
    {
        parent::__construct('');
    }

    public function run()
    {
        echo '404';
    }
}