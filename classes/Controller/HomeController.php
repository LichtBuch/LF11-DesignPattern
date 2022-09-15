<?php

namespace DesignPatterns\Controller;

use DesignPatterns\Facade\PaymentsFacade;

class HomeController extends Controller
{
    public function __construct(
        private readonly PaymentsFacade $paymentsFacade
    ){
        parent::__construct(__DIR__ . '/homeTemplate.php');
    }

    public function run()
    {
        echo $this->render([
            'payments' => $this->paymentsFacade->getMyPayments()
        ]);
    }

}