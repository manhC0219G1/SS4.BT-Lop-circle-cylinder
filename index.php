<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include_once "Cylinder.php";
include_once"Circle.php";
$circle = new Circle(5);
$cylinder = new Cylinder(10, 5);
echo "Circle area is :". $circle->getArea()."<br>";
echo" Cylinder volume is :" . $cylinder->getVolume();
?>
</body>
</html>
