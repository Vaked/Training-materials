<?php

class AlcoholicProduct
{
    private const LIQUOR_CONTENT = 40;

    public function getLiquorContent()
    {
        return self::LIQUOR_CONTENT . '%';
    }
}

class Vodka extends AlcoholicProduct
{
    // Implement vodka
}

$beverage = new AlcoholicProduct;

var_dump($beverage->getLiquorContent());
var_dump($beverage::LIQUOR_CONTENT);