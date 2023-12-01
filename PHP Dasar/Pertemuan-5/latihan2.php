<?php
$angka = [23, 56, 67, 32, 6, 78, 45];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            background-color: turquoise;
            margin: 10px;
            float: left;
        }
    </style>
</head>

<body>
    <?php for ($i = 0; $i < count($angka); $i++) : ?>
        <div class="kotak"><?= $angka[$i]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <?php foreach ($angka as $ang) : ?>
        <div class="kotak"><?= $ang; ?></div>
    <?php endforeach; ?>




</body>

</html>