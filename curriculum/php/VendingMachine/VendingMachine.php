<?php

class VendingMachine
{
    public function __construct(private string $manufacturerName)
    {

    }

    public function pressButton()
    {
        return 'cider';
    }

    public function pressManufacturerName()
    {
        return $this->manufacturerName;
    }

}

$vendingMachine = new VendingMachine('サントリー');
echo $vendingMachine->pressButton() . PHP_EOL;
echo $vendingMachine->pressManufacturerName() . PHP_EOL;
