<?php
class Circle
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }
    public  function toString(){
        echo "Area is ".$this->getArea()."<br>"."<br>";
    }
}

?>