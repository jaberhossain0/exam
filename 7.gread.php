<?php
$msg = "";

if(isset($_POST["submit"])){
    $number = $_POST["number"];

    if($number == "A"){
        $msg = "Excellent";
    }else if($number == "B"){
        $msg = "Good";
    }else if($number == "C"){
        $msg = "Fair";
    }else if($number == "D"){
        $msg = "Poor";
    }else if($number == "F"){
        $msg = "Failure";
    }else{
        $msg = "Please Provide A, B, C, D, F Letter";
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
        <input type="test" name="number" id="">
        <input type="submit" name="submit">
    </form>
    <br>
    <h2><?php echo $msg ?></h2>
</body>
</html>