<?php
// Standar output
// echo, print
// print_r  : Untuk memunculkan isi array
// var_dump : Untuk Debuging

/*
Penuisan syntaks PHP
1. php di dalam html
2. html di dalam php

Variabel & Tipe Data
*/

// Variabel
// $nama = "Galih";

// echo "Hallo , Nama saya $nama";

// Operator
// Aritmatika
// + - / %
// echo 1 + 1;
// $x = 20;
// $y = 70;

// echo $x + $y;

// Penggabung String /  Concatenation / Concat
// .
// $namaDepan = "Sandhika";
// $namaBelakang = "Galih";

// echo $namaDepan . " " . $namaBelakang;


// Operator Assigment
//  =, +=, *=, -=, /=, %=, .=
// $x = 3;
// $x /= 5;
// echo $x;

// $nama = "Sandhika";
// $nama .= " ";
// $nama .= "Galih";
// echo $nama;

// Operator Perbandingan
//  <, >, <= , >=, ==, !=
var_dump(1 == "1");

// Operator indentitas
// ===, !==
var_dump(1 === "1");

//  Operator logika
//&& , ||, !

$x = 20;
var_dump($x <= 35 && $x % 2 == 0)


// echo "Sandhika Galih";
// echo "<br>";
// print "Sandhika Galih";
// echo "<br>";
// print_r("Sandhika Galih");
// echo "<br>";

// var_dump("Sandhika Galih");
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar php</title>
</head>

<body>
    <h1>Hallo Selamat datang Sandhika</h1>

    <h1>Halo , Selamat Datang <?php echo $nama; ?> </h1>
    <?php
    echo "<h1>Halo , Selamat datang Sandhika</h1>";
    ?>
</body> -->



</html>