<?php
if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    $path = "upload/". $file['name'];
    $type = !empty($file['tmp_name']) ? mime_content_type($file['tmp_name']) : "";

    if(!file_exists($file["tmp_name"])){
            $msg = "<span style='color:red'>Please select a file</span>";
    }else if($file["size"] > 400 * 1024){
        $msg = "<span style='color:red'>File size must be less than 400kb</span>";
    }else if(($type == "image/jpeg"||
              $type == "image/jpg"||
              $type == "image/png"||
              $type == "application/pdf"||
              $type == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") == false){
              $msg = "<span style='color:red'>File type is not valid</span>";
    }else{
        $msg = "<span style='color:green'>File is valid</span>";
        move_uploaded_file($file['tmp_name'], $path);
        $img ="<img src='$path' width='200'>";
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
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <button type="submit" name="submit">Submit</button>
    </form>
    <h3><?= $msg ?? ""; ?></h3>
    <h3><?= $img ?? ""; ?></h3>
</body>
</html>