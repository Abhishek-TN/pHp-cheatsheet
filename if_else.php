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
        <label>radius: </label><br>
        <input type="text" name ="radius"><br>
        <input type="submit" value="calculate">

    </form><br>
</body>
</html>

<?php


$age = -1;
$adult = true;
// if else statement
if($adult == true){
    echo"You may enter this site<br>";
}
else{
    echo"You must be adult to enter";
}

if($age >= 100){
    echo"You are too old to enter";
}
elseif($age >= 18){
 echo "You may enter this site <br>";
}
elseif($age <= 0){
    echo"That was'nt a valid age<br>";
}
else{
    echo"You must be 18+ to enter<br>";
}


$hours = 40;
$rate = 15;
$weekly_pay = null;

if($hours <= 0){
    $weekly_pay = 0;
}
elseif($hours <= 40){
    $weekly_pay = $hours * $rate;
}
else{
    $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
}
echo"You made \${$weekly_pay} this week<br>";

?>