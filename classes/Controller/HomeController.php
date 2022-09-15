<?php

class HomeController extends Controller
{
    public function __construct(
        private readonly PaymentsFacade $paymentsFacade
    ){
        parent::__construct(__DIR__ . '/template.php');
    }

    public function run()
    {
        $this->render(['payments' => $this->paymentsFacade->getMyPayments()]);
    }

}