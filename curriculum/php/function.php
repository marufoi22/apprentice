<?php
function hello(){
    echo 'Hello World' . PHP_EOL;
}

function greeting(string $name){
    echo 'おはよう、' . $name . '!' . PHP_EOL;
}

hello();
greeting('渡辺');
