<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
        <input type="radio" name="credit_card" value="Visa">Visa<br>
        <input type="radio" name="credit_card" value="Visa">Master card<br>
        <input type="radio" name="credit_card" value="Visa">American express<br>
        <input type="submit" name = "confirm" value="confirm"><br>

    </form> 
</body>
</html>


<?php
  if(isset($_POST["confirm"])){

    $credit_card = null;
    if(isset($_POST["credit_card"])){
        $credit_card = $_POST["credit_card"];
        echo $credit_card;  
    }

    if($credit_card == "Visa"){
        echo"You selected Visa";
    }
    elseif($credit_card == "Master card"){
        echo"You selected Master card";
    }
    elseif($credit_card == "American express"){
        echo"You selected American express";
    }
    else{
        echo"Please make a selection";
    }
}

?>