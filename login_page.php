<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    username:<br>
        <input type="text" name="username"><br>
        <input type="text" name="age"><br>
        <input type="submit" name = "login" value="login"><br>

    </form> 
</body>
</html>


<?php
  if(isset($_POST["login"])){

    $username= filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    $age= filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
    // $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);

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