<?php
// Perulangan
// for
// for ($i =0; $i < 5; $i++) {
//     echo "Hello World! <br>";
// }

// While
// $i = 0;
// while ($i <10) {
//     echo "Halo Dunia <br>";
//     $i++;
// }

// Do While 
// $a = 0;
// do {
//     echo "Halo Dunia ini";
//     $a++;
// } while ($a < 5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>

<body>
    <table border="1" cellpadding="15" cellspacing="0">
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <tr>
                <?php for ($j = 0; $j < 5; $j++) : ?>
                    <td><?= "$i,$j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>