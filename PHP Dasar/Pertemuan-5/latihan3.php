<?php
$mahasiswa = [
    ["Sandhika", "6897708", "Teknik INFORMATIKA", "sandhikagmail"],
    ["Dody", "689789808", "Teknik INFORMATIKA", "dodygmail"],
    ["Erik", "689678888", "Teknik INFORMATIKA", "erikgmail"]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama :<?php $mhs[0]; ?></li>
            <li>NIM :<?php $mhs[1]; ?></li>
            <li>Jurusan :<?php $mhs[2]; ?></li>
            <li>Email :<?php $mhs[3]; ?></li>
        </ul>
    <?php endforeach;  ?>
</body>

</html>