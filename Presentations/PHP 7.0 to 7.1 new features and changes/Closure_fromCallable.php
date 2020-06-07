<?php

class Validator {
    public function getValidatorCallback($validationType) {
        if($validationType == 'email') {
            return Closure::fromCallable(['Validator', 'emailValidation']);
        }
        return Closure::fromCallable([$this,'genericValidation']);
    }
    private function emailValidation($userData) {}

    private function genericValidation($userData) {}
}

$validator = new Validator();

$callback = $validator->getValidatorCallback('email');
