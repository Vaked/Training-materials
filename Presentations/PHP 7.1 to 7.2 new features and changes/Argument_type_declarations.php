<?php

class MyClass {
	public $var = '';
}

class FirstChild extends MyClass {
	public $var = 'My name is Jim';
}
class SecondChild extends MyClass {
	public $var = 'My name is John';
}

$firstchild = new FirstChild;
$secondchild = new SecondChild;

function test(object $arg) {
	return $arg->var;
}

echo test($firstchild) . PHP_EOL;

echo test($secondchild);