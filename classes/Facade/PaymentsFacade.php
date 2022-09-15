<?php

class PaymentsFacade
{

    public function __construct(
        private readonly UserDao $userDao = new UserDao(),
        private readonly PaymentDao $paymentDao = new PaymentDao()
    ){}

    /**
     * @return Payment[]
     */
    public function getMyPayments(): array{
        $user = $this->userDao->find();
        return $this->paymentDao->findByUser($user);
    }

}