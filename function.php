<?php

// function = write some code once, reuse when you need it
//            type () after function name to invoke 
//            ex. add() subtract() multiply() divide()

    function hypotenuse(float $a, float $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    echo hypotenuse(4,5);


?>