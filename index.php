<?php
include_once 'class/Circle.php';
include_once 'class/Cylinder.php';
include_once 'class/Rectangle.php';
include_once 'class/Square.php';

$circle = new Circle('Circle 01', 3);
echo 'Circle area before: ' . $circle->getArea() . '<br>';
echo 'Circle perimeter before: ' . $circle->getPerimeter() . '<br>';
$circle->resize(30);
echo 'Circle area after: ' . $circle->getArea() . '<br>';
echo 'Circle perimeter after: ' . $circle->getPerimeter() . '<br>';

$cylinder = new Cylinder('Cylinder 01', 3, 4);
echo '<br>Cylinder area before: ' . $cylinder->getArea() . '<br>';
echo 'Cylinder perimeter before: ' . $cylinder->getPerimeter() . '<br>';
$cylinder->resize(40);
echo 'Cylinder area after: ' . $cylinder->getArea() . '<br>';
echo 'Cylinder perimeter after: ' . $cylinder->getPerimeter() . '<br>';


$rectangle = new Rectangle('Rectangle 01', 3, 4);
echo '<br>Rectangle area before: ' . $rectangle->getArea() . '<br>';
echo 'Rectangle perimeter before: ' . $rectangle->getPerimeter() . '<br>';
$rectangle->resize(35);
echo 'Rectangle area after: ' . $rectangle->getArea() . '<br>';
echo 'Rectangle perimeter after: ' . $rectangle->getPerimeter() . '<br>';

$square = new Square('Square 01', 5);
echo '<br>Square area before: ' . $square->getArea() . '<br>';
echo 'Square perimeter before: ' . $square->getPerimeter() . '<br>';
$square->resize(50);
echo 'Square area after: ' . $square->getArea() . '<br>';
echo 'Square perimeter after: ' . $square->getPerimeter() . '<br>';