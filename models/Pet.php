<?php

class Pet
{
    protected $category;
    public $img;

    function __construct($_category)
    {
        $this->category = $_category;
        $this->setImg();
    }

    function setImg()
    {
        if ($this->category === "dog") {
            $this->img = "./img/dog.jpeg";
        } else if ($this->category === "cat") {
            $this->img = "./img/cat.jpeg";
        }
    }
}
