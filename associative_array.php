<?php
    // associative array = An array made of key=>value pairs

    // countries => capitals
    // id => username
    // item => price


    $capitals = array("USA"=>"Washington D.C",
                      "Japan"=>"Kyoto",
                      "South korea"=>"Seoul",
                      "India"=>"New Delhi");

    $capitals["USA"] = "Las Vegas";

    array_pop($capitals); // remove last pair
    array_shift($capitals); // shifts first element out of the array
    
    $keys = array_keys($capitals); // creates a new array of keys
    $values = array_values($capitals); // creates a new array of values    
    
    $capitals = array_flip($capitals); // Values are swapped with keys
    
    $capitals = array_reverse($capitals); // reverses the order of the pairs

    echo count($capitals);
    
    foreach($keys as $key){
        echo"{$key} <br>";
    }
    foreach($capitals as $key => $value){
        echo"{$key} = {$value} <br>";
    }


?>
