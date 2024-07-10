<?php

function hello()
{
    //繰り返し処理には、whileよりforの方が短く書けるため選択
    for($i = 0;$i < 100; $i++)
    {
        echo "こんにちは" . PHP_EOL;
    }
}

hello();
