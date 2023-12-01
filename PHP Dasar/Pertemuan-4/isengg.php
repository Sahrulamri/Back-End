<?php

function waktuSaatIni()
{
    $waktuSekarang = date("H:i", time() + 7 * 3600);
    $tm = explode(":", $waktuSekarang);
    $jam = $tm[1];
    $menit = $tm[0];

    if ($jam >= 00 && $jam < 10) {
        if ($menit > 00 && $menit < 60) {
            $hasil = "Pagi";
        }
    } else if ($jam >= 10 && $jam < 15) {
        if ($menit > 00 && $menit < 60) {
            $hasil = "Siang";
        }
    } else if ($jam >= 15 && $jam < 18) {
        if ($menit > 00 && $menit < 60) {
            $hasil = "Sore";
        }
    } else if ($jam >= 18 && $jam <= 24) {
        if ($menit > 00 && $menit < 60) {
            $hasil = "Malam";
        }
    } else {
        $hasil = "EROR!!";
    }

    return $hasil;
}

$saatIni = waktuSaatIni();

function salam($nama = "Admin")
{
    global $saatIni;
    echo "Selamat " . $saatIni . ", " . $nama . "!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function PHP</title>
</head>

<body>

    <h1><?= salam("Amri") ?></h1>

</body>

</html>