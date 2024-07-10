<?php

class VendingMachine
{
    private int $inputCoin = 0;
    const CIDER_PRICE = 100;

    public function __construct(private string $manufacturerName)
    {
    }

    public function pressButton()
    {
        if($this->inputCoin >= self::CIDER_PRICE){
            $this->inputCoin - self::CIDER_PRICE;
            return 'cider' . PHP_EOL;
        }
    }

    private function pressManufacturerName()
    {
        return $this->manufacturerName . PHP_EOL;
    }

    public function depositCoin(int $coin)
    {
        if($coin % 100 === 0)
        {
            $this->inputCoin += $coin;
        }
    }
}

$vendingMachine = new VendingMachine('サントリー');
echo $vendingMachine->pressButton();

$vendingMachine->depositCoin(150);
echo $vendingMachine->pressButton();

$vendingMachine->depositCoin(100);
echo $vendingMachine->pressButton();

echo $vendingMachine->pressManufacturerName();
