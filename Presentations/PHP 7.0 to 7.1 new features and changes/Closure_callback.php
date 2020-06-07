<?php
function multiplyByTenReturnCallback($number, callable $callback)
{
    $number *= 10;

    return call_user_func($callback, $number);
}

function callableFunction($number){
    return "The number is {$number}\n"; 
}

echo multiplyByTenReturnCallback(4, function ($number) {
    return "The number is {$number}\n";
});

echo multiplyByTenReturnCallback(4, 'callableFunction');
