<?php


namespace DesignPattern\ChainOfResponsibilities;


class Bank
{
    protected $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }

    public function setNext(Paypal $paypal)
    {
    }

    public function pay(int $int)
    {
    }
}