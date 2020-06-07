<?php

class User
{
    public $name; 

    public function getName(): ?string
    {
        return $this->name;
    }

    public function printName(?string $name)
    {
        $this->name = $name;
        return $name;
    }
}

$user = new User;
// $user->name = "Sasho";

var_dump($user->getName());

var_dump($user->printName("Pesho"));
var_dump($user->printName(null));
// var_dump($user->printName());
