<?php
include_once "Circle.php";
include_once "Cylinder.php";
$circle = new Circle("blue",5);
echo $circle->toString()."</br>";
$cylinder = new Cylinder("blue",5,8);
echo $cylinder->toString();