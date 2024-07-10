<?php
function fibonacci($n)
{
    $allowance = 0;
    $previousAllowance = 0;
    $previousTwoAllowance = 0;

    for($i = 1; $i <= $n;$i++)
    {
        //1日目のお小遣いは、1とする
        if($i !== 1){
            $allowance = $previousAllowance + $previousTwoAllowance;
        } else {
            $allowance = 1;
        }
        //前回と前々回のお小遣い計算結果を退避する
        $previousTwoAllowance = $previousAllowance;
        $previousAllowance = $allowance;
    }
    echo $allowance . PHP_EOL;
}

fibonacci(0);
fibonacci(1);
fibonacci(2);
fibonacci(3);
fibonacci(4);
fibonacci(7);
fibonacci(30);
