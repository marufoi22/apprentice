<?php

class VendingMachine
{
    public function __construct(private string $manufacturerName)
    {

    }

    public function pressButton()
    {
        echo 'cider' . PHP_EOL;
    }

    public function pressManufacturerName()
    {
        return $this->manufacturerName;
    }

}

$vendingMachine = new VendingMachine('サントリー');
echo $vendingMachine->pressButton();
echo $vendingMachine->pressManufacturerName() . PHP_EOL;
