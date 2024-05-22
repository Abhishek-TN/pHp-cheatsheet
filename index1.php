<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <button>order a pizza</button><br><br><br>
<form action="index.php" method="post">
    <lable>username:</lable><br>
    <input type="text" name="username"><br>
    <lable>password:</lable><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Log in"><br><br><br>
</form>
</body>
</html>


<?php
echo"i love pizza <br>";
echo "Its really good <br>";
// This is a comment
/* this 
is 
multi line
comment
*/

// Variables

//Strings
$name = "Abhishek";
$food = "Pizza";
$email = "fake@gmail.com";
//integer
$age = 21;
$users = 3;
$quantity = 5;
//float
$cgpa = 8.49;
$price = 4.99;
$tax_rate = 5.1;
//boolean
$employeed = true;
$online=false;
$for_sale= true;

$total = null;

echo "Hello i am {$name}<br>";
echo "{$name} likes {$food}<br>";
echo "your e-mail is {$email}<br>";

echo"I am {$age} year old <br>";
echo"There are {$users} users online<br>";

echo"My CGPA is: {$cgpa}<br>";
echo"Your pizza is \${$price}<br>";
echo"The sales tax rate is: {$tax_rate}%<br>";

echo"Online status: {$online}<br>";
echo"Employeement status: {$employeed}<br>";


echo"You have ordered {$quantity} X {$food}s<br>";
$total = $quantity * $price;
echo"Your total is: \${$total}<br>";

// Arithematic operators
// + - * / ** %

    $x=10;
    $y = 2;
    $z = null;
// Addition
    $z = $x+$y;
    echo $z;
//Subtraction
    $z = $x-$y;
    echo $z;
//Multiplication
$z = $x*$y;
echo $z;
//Division
$z = $x/$y;
echo $z;
//Modulus
$z = $x%$y;
echo $z;

//Increment/Decrement operators

$counter = 10;
//Increment
$counter++;
echo $counter;
//Decrement
$counter--;
echo $counter;

//Operator precedence
// ()
// **
// * / %
// + -

$total = 1 + 2 - 12 / 15625;
echo "{$total}<br><br><br>";

// $_GET, $_POST =  special variables used to collect data from an HTML form
//      data is sent to the file in the action attribute of <form> 
//      <form action="some_file.php" method="get">

// $_GET = Data is appended to the url
//         NOT SECURE
//         char limit
//         Bookmark is possible w/ values
//         GET requests can be cached
//         Better for a search page

//$ POST = Data is packaged inside the body of the HTTP request
//         MORE SECURE
//         No data limit
//         Cannot bookmark
//         GET requests are not cached
//         Better for submitting credentials

//$_GET
// echo "username is: {$_GET["username"]}" . "<br><br>";
// echo "password is: {$_GET["password"]}";

//$_POST
echo "username is: {$_POST["username"]}" . "<br><br>";
echo "password is: {$_POST["password"]}";

?>

