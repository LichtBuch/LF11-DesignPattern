<?php

class PaymentDao{

    private array $payments;

    public function __construct(){
        $this->payments = [
            new Payment(1, 'Sneaker', 1.99),
            new Payment(2, 'Test', 3.99),
        ];
    }

    /**
     * @param User $user
     * @return Payment[]
     */
    public function findByUser(User $user): array{
        return array_map(fn(Payment $payment) => $payment->getUserID() === $user->getId(), $this->payments);
    }

}