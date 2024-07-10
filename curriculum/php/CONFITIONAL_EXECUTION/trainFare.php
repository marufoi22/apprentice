<?php

function trainFare(int $age)
{
    if($age < 6){
        $fare = 0;
    } else if ($age < 12){
        $fare = 100;
    } else {
        $fare = 200;
    }
    echo $fare . PHP_EOL;
}

trainFare(12);
trainFare(6);
trainFare(5);
