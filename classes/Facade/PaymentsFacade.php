<?php

class PaymentsFacade
{

    public function __construct(
        private readonly UserRepository    $userDao = new UserRepository(),
        private readonly PaymentRepository $paymentDao = new PaymentRepository()
    ){}

    /**
     * @return Payment[]
     */
    public function getMyPayments(): array{
        $user = $this->userDao->find();
        return $this->paymentDao->findByUser($user);
    }

}