<?php
/**
 * Created by PhpStorm.
 * User: eqp326
 * Date: 10/01/17
 * Time: 11:09
 */
class Money
{
    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function negate()
    {
        return new Money(-1 * $this->amount);
    }
}