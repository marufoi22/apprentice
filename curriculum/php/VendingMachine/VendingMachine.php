<?php

class VendingMachine
{
    private int $inputCoin = 0;
    const PRICES = [
        'cider' => 100,
        'cola' => 150,
    ];

    public function __construct(private string $manufacturerName)
    {
    }

    public function pressButton(Item $item)
    {
        $price = self::PRICES[$item->getName()];
        if($this->inputCoin >= $price){
            $this->inputCoin - $price;
            return $item->getName() . PHP_EOL;
        } else {
            return '' . PHP_EOL;
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

class Item
{
    public function __construct(private string $name)
    {
    }

    public function getName()
    {
        return $this->name;
    }
}

$cola = new Item('cola');
$vendingMachine = new VendingMachine('サントリー');
$vendingMachine->depositCoin(100);
echo $vendingMachine->pressButton($cola);
$vendingMachine->depositCoin(100);
echo $vendingMachine->pressButton($cola);
