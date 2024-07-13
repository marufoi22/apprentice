<?php

class VendingMachine
{
    public function depositCoin(int $inputCoin)
    {
        try {
            echo '開始' . PHP_EOL;
            if($inputCoin !== 100){
                throw new Exception('対応していないコインです');
            }
        } catch(Exception $e){
            echo '例外:' . $e->getMessage() . PHP_EOL;
        } finally {
            echo '終了' . PHP_EOL;
        }
    }
}

$vendingMachine = new VendingMachine();
$vendingMachine->depositCoin(100);
$vendingMachine->depositCoin(150);
