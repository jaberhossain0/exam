<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    
    if(empty($username)){
        $error = "<span style='color:red'>Please enter your username</span>";
    }elseif(strlen($username) < 4 || strlen($username) > 8){
        $error = "<span style='color:red'>Username must be between 4 and 8 characters</span>";
    }elseif(strpos($username, "@") == false){
        $error = "<span style='color:red'>Username must contain @</span>";
    }else{
        $error = "<span style='color:green'>Username is valid</span>";
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
    <form action="" method="POST">
        <input type="text" name="username">
        <button type="submit" name="submit">Submit</button>
    </form>
    <?= $error ?? ""; ?>
</body>
</html>