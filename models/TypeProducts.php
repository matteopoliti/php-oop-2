<?php

class TypeProducts extends Product
{
    public $type;
    public $details;

    public function setType($_type, $_details)
    {
        $this->type = $_type;
        $this->details = $_details;
    }
}
