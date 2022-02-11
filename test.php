<?php

require 'BaseModel.php';
require 'Product.php';
require 'BalanceIsFrozenException.php';
require 'NoEnoughMoneyException.php';

$product = new Product(1);
$baseModel = new BaseModel();

try {
    $product->setBalance(-10);
    echo 'qwq;';
} catch (NoEnoughMoneyException $e) {
    echo $e->getMessage();
} catch (BalanceIsFrozenException $e) {
    echo 'gg';
    echo $e->getMessage();
} catch (Exception $e) {
}

$controller = new Controller();

$controller->transferMoney(new Computer());
