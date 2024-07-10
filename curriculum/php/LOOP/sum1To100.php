<?php

function sum1To100()
{
    $totalCount = 0;
    for($i = 1;$i <= 100;$i++)
    {
        $totalCount += $i;
    }
    echo $totalCount . PHP_EOL;
}

sum1To100();
