<?php

class Motorbike extends Vehicle
{
    function ride()
    {
        echo 'Motorbike called ' . $this->name . " "
            . 'with color ' . $this->color . " ride";
    }
}