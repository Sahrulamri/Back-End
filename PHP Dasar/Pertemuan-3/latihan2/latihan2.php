<?php
// Condition
$i = 100;
if ($i < 10) {
    echo "Bagus";
} else if ($i > 10) {
    echo "Benar";
} else {
    echo "Tidak tahu";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<style>
    .warna {
        background-color: green;
    }

    .aku {
        background-color: blue;
    }
</style>

<body>
    <table border="1" cellpadding="15" cellspacing="0">
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
                <tr class="warna">
                <?php else : ?>
                <tr class="aku">
                <?php endif; ?>
                <?php for ($j = 0; $j < 5; $j++) : ?>
                    <?php if ($j % 2 == 0) : ?>
                        <td class="aku">
                        <?php else : ?>
                        <td class="warna">
                        <?php endif; ?>
                        <?= "$i,$j"; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    </table>
</body>

</html>