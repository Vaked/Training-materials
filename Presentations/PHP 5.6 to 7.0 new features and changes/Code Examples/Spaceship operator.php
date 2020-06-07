<?php

//Spaceship operator

function printLine($string)
{
    echo $string . "\n";
}

printLine("Integer example");
printLine(2 <=> 4); // 2 - 4 = -2 :: negative result == negative output
printLine(2 <=> 2); // 2 - 2 = 0 :: 0 == 0 output
printLine(5 <=> 1); // 5 - 1 = 4 :: positive result == 1
printLine("\n");

printLine("String example");
printLine([2,3,4,5] <=> [1,4,3,6]);
printLine("a" <=> "a");
printLine(" " <=> "a");
printLine("\n");

