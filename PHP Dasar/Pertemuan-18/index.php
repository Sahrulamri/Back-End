<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require "functions.php";


// Pagination
// halaman = 2, awaldata = 2
// humlahdata  + halaman  - jumlahdata 
// 2 + 2 - 2 = 2
// halaman = 3 , awalData = 4
// humlahdata  + halaman  - jumlahdata +  1
// 2 + 3 - 2 + 1  = 
// halaman = 4 , awalData = 6
// humlahdata  + halaman  - jumlahdata -  1
// 2 + 6 - 2 = 6
// halaman = 5 , awalData = 8
// humlahdata  + awal daata  - jumlahdata -  1
// 2 + 8 / 2
// halaman = 6 , awalData = 10
// humlahdata  + awal daata  - jumlahdata -  1
// 2 + 10 / 2



// Konfiguration
$jumlahdataPerHalaman = 2;
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
$jumlahData = mysqli_num_rows($result);

$jumlahHalaman = ceil($jumlahData / $jumlahdataPerHalaman);

// 
if (isset($_GET["halaman"])) {
    $halamanAktif = $_GET["halaman"];
} else {
    $halamanAktif = 1;
}

$awalData = ($jumlahdataPerHalaman * $halamanAktif) - $jumlahdataPerHalaman;



$mahasiswa =  query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahdataPerHalaman");
// ORDER BY
// ASC (Ascending = dari kecil ke besar)
// DESC (Descending = dari besar ke kecil)

// Jika tombol cari dipencet

if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="ms-5">
        <h1>Daftar mahasiswa</h1>
        <button type="submit" class="btn btn-primary"><a href="tambah.php" style="color:white; text-decoration:none">Tambah Data</a></button>
    </div>

    <div class="ms-5">
        <a href="logout.php">Logout</a>
    </div>

    <div class="container mt-5 ">
        <form action="" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan yang anda cari..." aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword" autofocus autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-outline-info" type="submit" name="cari">Cari</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Navigasi -->

    <?php if ($halamanAktif > 1) : ?>
        <a href="?halaman=<?php echo $halamanAktif - 1  ?> ">&laquo;</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if ($i == $halamanAktif) : ?>
            <a href="index.php?halaman=<?php echo $i; ?> " style="font-weight: bold; color: red; "><?php echo $i; ?></a>
        <?php else : ?>
            <a href="index.php?halaman=<?php echo $i; ?> "><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($halamanAktif < $jumlahHalaman) : ?>
        <a href="?halaman=<?php echo $halamanAktif + 1  ?> ">&raquo;</a>
    <?php endif; ?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">NO.</th>
                <th scope="col">Aksi</th>
                <th scope="col">Gambar</th>
                <th scope="col">NRP</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 + $awalData; ?>
            <?php foreach ($mahasiswa as $mhs) :
            ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td>
                        <button class=" btn btn-warning"><a class="text-decoration-none text-white" href="update.php?id=<?php echo $mhs["id"]; ?>">Update</a></button>
                        <button class="btn btn-danger"><a class="text-decoration-none text-white" href="delete.php?id=<?php echo $mhs["id"]; ?>" onclick="return confirm('Do you want to delete this data ?');">Delete</a></button>
                    </td>
                    <td><img src="img/<?php echo $mhs["gambar"]; ?>" width="80px"></td>
                    <td><?php echo $mhs["nrp"]; ?></td>
                    <td><?php echo $mhs["nama"]; ?></td>
                    <td><?php echo $mhs["email"]; ?></td>
                    <td><?php echo $mhs["jurusan"]; ?></td>

                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>