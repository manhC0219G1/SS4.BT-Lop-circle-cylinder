<?php
include_once"Circle.php";

class Cylinder extends Circle
{
    public $height;

    public function __construct($radius, $height)
    {
        parent::__construct($radius);
        $this->height = $height;
    }

    public function getVolume()
    {
        return parent::getArea() * $this->height;
    }
}

?>