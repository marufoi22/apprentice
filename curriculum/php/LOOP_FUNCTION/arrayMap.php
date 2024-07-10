<?php

function square($numbers)
{
    return array_map(fn($num) => $num **2,$numbers);
}

$squaredNumbers = square([5, 7, 10]);
print_r($squaredNumbers);
