<?php
include_once "Point2D.php";
include_once "Point3D.php";
$point2D = new Point2D(3,4);
$point3D = new Point3D(4,2.5,6,7);
var_dump($point2D->getXY());
var_dump($point3D->getXYZ());
