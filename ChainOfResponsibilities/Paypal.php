<?php


namespace DesignPattern\ChainOfResponsibilities;


class Paypal
{
    protected $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }

    public function setNext(Bitcoin $bitcoin)
    {
    }
}