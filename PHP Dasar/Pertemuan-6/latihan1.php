<!-- Array Asosiatife -->

<?php
// $mahasiswa = [
//     ["Sandhika Galih", "05894332266", "Teknik Informatika", "sandhikagalih@gmail.com"],
//     ["Doody Firmansyah", "6879432364", "Teknik Informatika", "doddyfirmansyah@gmail.com"]
// ]
?>

<?php
$mahasiswa = [
    [
        "gambar" => "download2.png",
        "nama" => "Sandhika Galih",
        "NIM" => "436335737",
        "Jurusan" => "Teknik Informatika",
        "Email" => "sandhikagalih@gmail.com",
        "Tugas" => [80, 90, 85, 95, 100]
    ], [
        "gambar" => "download5.jpg",
        "nama" => "Doddy Firmansyah",
        "NIM" => "09889877776",
        "Jurusan" => "Teknik Informatika",
        "Email" => "doddyfirmansyah@gmail.com",
        "Tugas" => [80, 90, 85, 95, 100]

    ]
];

// echo $mahasiswa ["Jurusan"];
// echo "<br>";
// echo $mahasiswa["nama"];

// echo $mahasiswa[1]["Email"];
// echo "<br>";
// echo $mahasiswa[1]["Tugas"][0];



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

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>

            <img src="img/<?php echo $mhs["gambar"]; ?>" alt="">

            <li>Nama :<?php echo $mhs["nama"]; ?></li>
            <li>NIM :<?php echo $mhs["NIM"]; ?></li>
            <li>Jurusan :<?php echo $mhs["Jurusan"]; ?></li>
            <li>Email :<?php echo $mhs["Email"]; ?></li>
            <li>Tugas :
                <?php foreach ($mhs["Tugas"] as $data) : ?>
                    <?php echo $data . " "; ?>
                <?php endforeach; ?>
            </li>
        </ul>
    <?php endforeach;  ?>
</body>

</html>