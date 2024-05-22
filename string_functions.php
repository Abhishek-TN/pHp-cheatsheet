<?php
    $username = "Abhi Shek TN";
    $phone = "123-456-789";

    $username = strtolower($username);
    $username = strtolower($username);
    $username = trim($username); // to remove white spaces
    $username = str_pad($username,20,"0");
    $phone = str_replace("-","",$phone);
    $username = strrev($username);
    $username = str_shuffle($username);
    $username = strcmp($username,"Abhishek");
    $username = strlen($username);
    $index = strpos($phone , "-");
    $firstname = substr($username ,0, 4);
    $lastname = substr($username ,5);
    $fullname = explode(" ",$username);
    // $username = implode(" ",$username);

    foreach($fullname as $name){
        echo $name . "<br>";
    }
?>