<?php

function greater($x,int $y):void
{
    $result = '';
    if($x > $y){
        $result = 'x > y';
    } else if ($x < $y){
        $result = 'x < y';
    } else if ($x === $y){
        $result = 'x == y';
    }
    echo $result . PHP_EOL;
}

greater(5, 4);
greater(-50, -40);
greater(10, 10);
