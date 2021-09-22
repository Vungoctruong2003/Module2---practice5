<?php
include_once "Point.php";
include_once "MoveablePoint.php";
$point =new Point(4,5);
echo $point->toString()."</br>";
$movePoint = new MoveablePoint(4,5,2,4);
echo  $movePoint->toString();
