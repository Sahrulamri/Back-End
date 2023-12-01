<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <ul>
        <li>
            <img src="img/<?php echo $_GET["gambar"]; ?>" alt="gambar">
        </li>
        <li>Nama :
            <?php echo $_GET["nama"]; ?>
        </li>
        <li>NIM :
            <?php echo $_GET["nim"]; ?>
        </li>
        <li>Jurusan :
            <?php echo $_GET["jurusan"]; ?>
        </li>
        <li>Email :
            <?php echo $_GET["email"]; ?>
        </li>
    </ul>
    <a href="latihan1.php">Kembali</a>
</body>

</html>