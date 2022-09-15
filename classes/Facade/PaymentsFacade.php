<?php

class PaymentsFacade
{

    public function __construct(
        private readonly UserRepository    $userRepository = new UserRepository(),
        private readonly PaymentRepository $paymentRepository = new PaymentRepository()
    ){}

    /**
     * @return Payment[]
     */
    public function getMyPayments(): array{
        $user = $this->userRepository->find();
        return $this->paymentRepository->findByUser($user);
    }

}