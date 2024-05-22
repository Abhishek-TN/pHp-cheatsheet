<?php
    // array = "variable" which can hold more than one value at a time

    $foods = array("apple","orange","bannana","coconut");
    echo $foods[0] . "<br>";
    echo $foods[1] . "<br>";
    echo $foods[2] . "<br>";
    echo $foods[3] . "<br>";

    $foods[0] = "pineapple";
    
    array_push($foods , "mango","kiwi"); // add elements to the end of the array

    array_pop($foods);
    array_shift($foods);
    $reversed_foods = array_reverse($foods);
    echo count($foods);
    
    foreach($foods as $food){
        echo$food . "<br>";

    }
?>