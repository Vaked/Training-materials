<?php

//Exception handling

// declare(strict_types=1);

function integerAddition(int $firstNumber, int $secondNumber)
{
    $result = $firstNumber + $secondNumber;

    return $result;
}

function printLine($string)
{
    echo $string."\n";
}

printLine(integerAddition("1.0", "2.0"));

try {
    // printLine(integerAddition("1.0", "2.0"));
    printLine(integerAddition(1,2));
} catch (TypeError $error) {
    print($error->getMessage());
}