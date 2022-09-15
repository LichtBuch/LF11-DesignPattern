<?php

class Payment
{

    public function __construct(
        private int $userID,
        private string $productName,
        private float $amount
    ){}

    /**
     * @return int
     */
    public function getUserID(): int
    {
        return $this->userID;
    }

    /**
     * @param int $userID
     * @return Payment
     */
    public function setUserID(int $userID): Payment
    {
        $this->userID = $userID;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     * @return Payment
     */
    public function setProductName(string $productName): Payment
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return Payment
     */
    public function setAmount(float $amount): Payment
    {
        $this->amount = $amount;
        return $this;
    }



}