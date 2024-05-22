<?php

//switch = replacement to using many elseif statements
//           more efficient, less code to write

$date = date("l");

$date = "Thursday";

switch($date){

case "Monday":

    echo "I hate Mondays";

break;

case "Tuesday":

    echo "It is Taco Tuesday!";

break;

case "Wednesday":

    echo "The work week is half over!";

break;

case "Thursday":

    echo "It's almost the weekend!";

break;

}

?>