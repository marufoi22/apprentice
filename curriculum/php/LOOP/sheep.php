<?php

function sheep($count)
{
    for($i = 1;$i <= $count;$i++)
    {
        echo '羊が' . $i . '匹' . PHP_EOL;
    }
}

sheep(100);
