<?php
include_once "class/Shape.php";
include_once "class/Resizeable.php";

class Circle extends Shape implements Resizeable
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter()
    {
        return pi() * $this->radius * 2;
    }

    function resize($doublePercent)
    {
        $this->radius += $this->radius * $doublePercent / 100;
    }
}