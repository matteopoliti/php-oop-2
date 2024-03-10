<?php

class Product
{
    public $name;
    private $price;
    public $pet;
    protected $img;


    function __construct($_name, $_price, Pet $_pet, $_img)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->pet = $_pet;
        $this->img = $_img;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getImg()
    {
        return $this->img;
    }
}
