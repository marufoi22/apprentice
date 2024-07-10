<?php

function sum(int $x,int $y)
{
    $totalCount = 0;
    while($y >= $x){
        $totalCount += $x;
        $x++;
    }
    echo $totalCount . PHP_EOL;
}

sum(10, 80);
sum(78, 16);
sum(16, 50);
