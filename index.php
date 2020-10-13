<?php
include_once(dirname(__FILE__) . '/Interface/Colorable.php');
include_once(dirname(__FILE__) . '/Shape/Circle.php');
include_once(dirname(__FILE__) . '/Shape/Rectangle.php');
include_once(dirname(__FILE__) . '/Shape/Square.php');

$circle1 = new Circle(6, 'Circle1');
$circle2 = new Circle(7, 'Circle2');
$circle3 = new Circle(8, 'Circle3');
$circle4 = new Circle(9, 'Circle4');

$rectangle1 = new Rectangle(10, 5, 'rectangle1');
$rectangle2 = new Rectangle(11, 6, 'rectangle2');
$rectangle3 = new Rectangle(12, 7, 'rectangle3');

$square1 = new Square(5, 'colorable');
$square2 = new Square(7, 'colorable');

$arr = [$circle1, $rectangle1, $square2, $circle2, $rectangle2, $circle4, $rectangle3, $square1, $circle3];

foreach ($arr as $value) {
    if ($value->getName() === 'colorable') {
      echo $value->howToColor() . "<br>";
    } else {
        echo $value->getArea() . "<br>";
    }
}