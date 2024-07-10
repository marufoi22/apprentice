<?php

function xorCheck($x,$y)
{
    if($x === $y){
        $result = 'false';
    } else if ($x !== $y){
        $result = 'true';
    }
    echo $result . PHP_EOL;
}

xorCheck(true, true);
xorCheck(true, false);
xorCheck(false, true);
xorCheck(false, false);
