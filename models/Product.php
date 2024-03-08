<?php

class Product
{
    protected $name;
    private $price;
    protected $pet;


    function __construct($_name, $_price, Pet $_pet)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->pet = $_pet;
    }
}
