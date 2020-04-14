<?php
include_once "class/Shape.php";
include_once "class/Resizeable.php";

class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }

    public function getPerimeter()
    {
        return ($this->width + $this->height) * 2;
    }

    function resize($doublePercent)
    {
        $this->width += $this->width * $doublePercent / 100;
        $this->height += $this->height * $doublePercent / 100;
    }
}