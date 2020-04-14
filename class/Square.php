<?php
include_once "class/Rectangle.php";

class Square extends Rectangle
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }

    public function resize($doublePercent)
    {
        parent::resize($doublePercent);
        $this->width += $this->width * $doublePercent / 100;
    }
}