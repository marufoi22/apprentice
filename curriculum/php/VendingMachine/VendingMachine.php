<?php

class VendingMachine
{
    public function pressButton()
    {
        echo 'cider' . PHP_EOL;
    }

}

$vendingMachine = new VendingMachine();
echo $vendingMachine->pressButton();
