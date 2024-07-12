<?php

abstract class Human
{
    abstract public function greeting();
}

class Mother
{
    public function wakeUp(Human $human)
    {
        $human->greeting();
    }
}

class Japanese extends Human
{
    public function greeting()
    {
        echo 'おはよう!' . PHP_EOL;
    }
}

class American extends Human
{
    public function greeting()
    {
        echo 'Good Morning!' . PHP_EOL;
    }
}

$mother = new Mother();
$mother->wakeUp(new Japanese());
$mother->wakeUp(new American());
