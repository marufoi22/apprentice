<?php

class VendingMachine
{
    private int $inputCoin = 0;
    private int $cupNum = 0;
    const MAX_CUP_NUM = 100;

    public function __construct(private string $manufacturerName)
    {
    }

    public function pressButton(Item $item)
    {
        if($item instanceof CupCoffee && $this->cupNum > 0 && $this->inputCoin >= $item->getPrice()){
            $this->cupNum--;
        } else if ($item instanceof Drink && $this->inputCoin >= $item->getPrice()){
        } else {
            return '' . PHP_EOL;
        }

        $this->inputCoin -= $item->getPrice();
        return $item->getName() . PHP_EOL;
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

    public function addCup(int $cup)
    {
        $this->cupNum += $cup;
        if($this->cupNum > self::MAX_CUP_NUM) {
            $this->cupNum = self::MAX_CUP_NUM;
        }
    }
}

class Item
{
    private const PRICES = [
        'cider' => 100,
        'cola' => 150,
        'hot cup coffee' => 100,
        'ice cup coffee' => 100,
    ];
    public function __construct(protected string $name)
    {
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return self::PRICES[$this->getName()];
    }
}

class CupCoffee extends Item
{
    public function __construct(private string $kind)
    {
        $this->name = $kind . ' cup coffee';
    }
}

class Drink extends Item
{
}

$hotCupCoffee = new CupCoffee('hot');
$cider = new Drink('cider');
$vendingMachine = new VendingMachine('サントリー');
$vendingMachine->depositCoin(100);
$vendingMachine->depositCoin(100);
echo $vendingMachine->pressButton($cider);

echo $vendingMachine->pressButton($hotCupCoffee);
$vendingMachine->addCup(1);
echo $vendingMachine->pressBUtton($hotCupCoffee);
