<?php

// Logical operators = combine conditional statements

// if(condition1 && condition2)

// && = True if both conditions are true.

// || =  True if at least one condition is true.

// ! = True if false. False if true.

$child = true;
$senior = false;
$ticket = null;

if($child || $senior){
    $ticket = 10;
}
else{
    $ticket = 15;
}

echo"The ticket price is \${$ticket}";

?>