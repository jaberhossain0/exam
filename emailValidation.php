<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];

    $regex = "/^[a-zA-Z0-9_.]{4,20}[@]{1}[a-zA-z0-9]{2,10}[.]{1}[a-zA-Z]{2,8}$/";

    if(preg_match($regex, $email) === 0){
        $valid = "<span style='color:red'>Email is not valid</span>";
    }else{
        $valid = "<span style='color:green'>Email is valid</span>";
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
        <input type="text" name="email" value="jaber@mail.com">
        <button type="submit" name="submit">Submit</button>
    </form>

    <?= $valid ?? ""; ?>
</body>
</html>