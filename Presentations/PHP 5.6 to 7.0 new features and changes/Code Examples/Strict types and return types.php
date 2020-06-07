<?php


declare(strict_types=1);

function integerAddition(int $firstNumber, int $secondNumber)
{
    $result = $firstNumber + $secondNumber;

    return $result;
}

function floatAddition(float $firstNumber, float $secondNumber) : float
{
    $result = $firstNumber + $secondNumber;

    return (string)$result;
    return $result;
}

function printLine($string)
{
    echo $string."\n";
}

// Strict types and return types

// printLine(integerAddition(1.0,2.0));
// printLine(integerAddition("1","2"));
// printLine(floatAddition("1","2"));
printLine(floatAddition(1.0,2.0));
printLine("\n");