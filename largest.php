<?php
$msg = "";

if(isset($_POST["submit"])){
    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];
    $num3 = $_POST["number3"];

    if($num1 > $num2 && $num1 > $num3){
        $msg = "$num1 is the largest number";
    }else if($num2 > $num1 && $num2 > $num3){
        $msg = "$num2 is the largest number";
    }else{
        $msg = "$num3 is the largest number";
    }
        
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="number1" id="">
        <input type="number" name="number2" id="">
        <input type="number" name="number3" id="">
        <input type="submit" name="submit">
    </form>
    <h2><?= $msg; ?></h2>
</body>
</html>