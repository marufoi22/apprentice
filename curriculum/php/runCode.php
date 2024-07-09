<?php

echo '好きな数値を入力してください：';
$inputNum = trim(fgets(STDIN));

$doubleNum = $inputNum * 2;
echo '2倍の数値です：' . $doubleNum . PHP_EOL;
