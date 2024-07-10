<?php

function printNames(array $names)
{
    foreach($names as $index => $name)
    {
        echo ++$index . '. '. $name . PHP_EOL;
    }
}

printNames(['上田', '田仲', '堀田']);
