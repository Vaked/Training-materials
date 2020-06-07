<?php

$response = ['alex', '27', 'blue'];
 list($name, $age, $colour) = $response;
[$name, $age, $colour] = $response;

// $keyValueResponse = ['name' => 'alex', 'age' => '27', 'colour' => 'blue'];
// ['name' => $name, 'colour' => $colour, 'age' => $age] = $keyValueResponse;

echo $name . ' ';
echo $age . ' ';
echo $colour . ' ';
