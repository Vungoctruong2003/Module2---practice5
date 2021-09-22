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
<form action="" method="post">
    <h4> Tam giác của bạn: </h4>
    <table>
        <tr>
            <td>
               Cạnh 1:
            </td>
            <td>
                Cạnh 2:
            </td>
            <td>
               Cạnh 3:
            </td>
            <td>
               Màu Sắc:
            </td>
            <td>
                Tên:
            </td>
        </tr>
        <tr>
            <td>
                <input type="number" name="side1">
            </td>
            <td>
                <input type="number" name="side2">
            </td>
            <td>
                <input type="number" name="side3">
            </td>
            <td>
                <input type="text" name="color">
            </td>
            <td>
                <input type="text" name="name">
            </td>
            <td>
                <input type="submit" value="Xem thông tin">
            </td>
        </tr>
    </table>
</form>
</body>
</html>

<?php
include_once "Shape.php";
include_once "Triangle.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $side1 = $_POST["side1"];
    $side2 = $_POST["side2"];
    $side3 = $_POST["side3"];
    $color = $_POST["color"];
    $name = $_POST["name"];

    $tamgiac = new Triangle($name,$side1,$side2,$side3,$color);
    $tamgiac->toString();
}
?>