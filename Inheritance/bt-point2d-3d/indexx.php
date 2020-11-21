<?php
include_once("Point2d.php");
include_once("Point3d.php");
$point2d = new Point2d(1, 2);
echo $point2d->toString() . "<br>";
$point3d = new Point3d(1.3, 2, 3);
echo $point3d->toString();