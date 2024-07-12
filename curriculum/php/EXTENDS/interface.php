<?php

interface Item
{
    public function getName();
    public function getPrice();
}

class Drink implements Item
{
    const PRICES = [
        'cola' => 150,
    ];

    public function __construct(private string $name)
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

$cola = new Drink('cola');
echo $cola->getPrice() . PHP_EOL;
