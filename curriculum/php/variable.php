<?php
const TIME_UNIT = 60;

function secondsConvertToTime($s)
{
    $seconds = $s;
    $oneHourBySeconds = TIME_UNIT ** 2;
    $oneMinuteBySeconds = TIME_UNIT;

    //秒→時間
    $hours = floor($seconds / $oneHourBySeconds);
    $seconds -= $hours * $oneHourBySeconds;

    //秒→分
    $minutes = floor($seconds / $oneMinuteBySeconds);
    $seconds -= $minutes * $oneMinuteBySeconds;

    echo $hours . ':' . $minutes . ':' . $seconds . PHP_EOL;
}

secondsConvertToTime(4210);
