<?php

//Null coalescing

include_once("./Spaceship operator.php");

// function printLine($string)
// {
//     echo $string."\n";
// }

// $stringVariable = "Elka";
$coalescingExample = $stringVariable ?? "Stanka";
printLine($coalescingExample);