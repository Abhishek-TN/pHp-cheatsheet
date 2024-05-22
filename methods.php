// $_POST method example


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>x: </label><br>
        <input type="text" name ="x"><br>
        <label>y: </label><br>
        <input type="text" name ="y"><br>
        <label>z: </label><br>
        <input type="text" name ="z"><br>
        <input type="submit" value="total">

    </form>
</body>
</html>

<?php


$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;
// $total = abs($x);
// $total = round($x); to round up the number ex: round(3.99) = 4
// $total = floor($x); to round down the number ex: floor(3.99) = 3
// $total = ceil($x);
// $total = sqrt($x);
// $total= pow($x,$y);
// $total = max($x,$y,$z);
// $total = min($x,$y,$z);
// $total = pi();
// $total = rand(1,6);  rnad(min, max); 
echo $total;




?>