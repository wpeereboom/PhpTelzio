<?php
namespace PhpTelzio\Entity;

class Account
{
    /**
     * @var string
     */
    protected $balance;

    /**
     * @return string
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param string $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }
}