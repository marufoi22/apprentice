<?php

function fizzBuzz()
{
    //1から100までの変数を繰り返し処理で作成
    for($i = 1; $i <= 100; $i++){
        //3かつ5の倍数の時「FizzBuzz」と出力する
        //3でも5でも割り切れる場合は、先に判定する
        if($i % 15 === 0){
            echo "FizzBuzz" . PHP_EOL;
        #3の倍数の時「Fizz」と出力する
        } else if ($i % 3 === 0){
            echo "Fizz" . PHP_EOL;
        #5の倍数の時「Buzz」と出力する
        } else if ($i % 5 === 0){
            echo "Buzz" . PHP_EOL;
        }
        #それ以外の場合、数字を出力する
        else {
            echo $i . PHP_EOL;
        }
    }
}

fizzBuzz();
