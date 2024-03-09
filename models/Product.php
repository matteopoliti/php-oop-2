<?php

class Product
{
    public $name;
    private $price;
    public $pet;


    function __construct($_name, $_price, Pet $_pet)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->pet = $_pet;
    }

    function getPrice()
    {
        return $this->price;
    }
}
