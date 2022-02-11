<?php

class Product extends BaseModel
{
    private $id;
    private $balance;

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param mixed $balance
     */
    public function setBalance($balance): void
    {
        if ($balance < 0) {
            throw new NoEnoughMoneyException('No enough amount');
        }
        if ($this->isFrozen($balance)) {
            throw new BalanceIsFrozenException('Balance is frozen');
        }
        $this->balance = $balance;
    }

    private function isFrozen($balance) {
        return false;
    }

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }



    public static $table = 'products';

    public static function mystatic()
    {

        parent::mystatic();

    }

    public function hello()
    {
        parent::hello();

    }

    private function test() {

    }
}