<?php 

class MyClass {
	public $var = 'Hello World';
}

$myclass = new MyClass;

function test(MyClass $arg) : object {
	return $arg;
}

echo test($myclass)->var;

//In previous versions, the expected return type would have been "Object" and we would receive a fatal error