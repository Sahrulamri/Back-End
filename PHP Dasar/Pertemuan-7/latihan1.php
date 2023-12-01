<?php
$mahasiswa = [
    [
        "gambar" => "download2.png",
        "nama" => "Sandhika Galih",
        "nim" => "436335737",
        "jurusan" => "Teknik Informatika",
        "email" => "sandhikagalih@gmail.com",
        "tugas" => [80, 90, 85, 95, 100]
    ], [
        "gambar" => "download5.jpg",
        "nama" => "Doddy Firmansyah",
        "nim" => "09889877776",
        "jurusan" => "Teknik Informatika",
        "email" => "doddyfirmansyah@gmail.com",
        "tugas" => [80, 90, 85, 95, 100]
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><a href="latihan2.php?nama=<?php echo $mhs["nama"]; ?>&nim=<?php echo $mhs["nim"]; ?>&jurusan=<?php echo $mhs["jurusan"]; ?>&email=<?php echo $mhs["email"]; ?>&gambar=<?php echo $mhs["gambar"]; ?>"><?php echo $mhs["nama"]; ?></a></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>