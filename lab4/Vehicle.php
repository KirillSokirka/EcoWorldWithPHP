<?php

abstract class Vehicle
{
    protected $name;
    protected $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    abstract function ride();
}

?>