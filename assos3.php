<?php
$arr = [
    "arif"       => "13",
    "masum"      => "10",
    "faysal"     => "40",
    "khairul"    => "25",
    "hridoy"     => "11",
];

// foreach($arr as $k => $val){
// print_r($arr);
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Student Name:</th>
            <td>Score:</td>
        </tr>
        <?php
        foreach ($arr as $name => $score) : ?>
             <tr>
             <td><?=$name;?></td>
             <td><?=$score;?></td>
             </tr>

        <?php endforeach;?>
    </table>

    <h2>highest Score is: <?php $max_score = max($arr); echo max($arr);?></h2>
    <h2>Student Name: <?php echo array_search($max_score, $arr);?></h2>
</body>

</html>