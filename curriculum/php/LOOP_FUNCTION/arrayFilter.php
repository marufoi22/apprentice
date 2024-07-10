<?php

function selectEvenNumbers($numbers)
{
    return array_filter($numbers,fn($num) => $num % 2 === 0);
}

$evenNumbers = selectEvenNumbers([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
print_r($evenNumbers);
