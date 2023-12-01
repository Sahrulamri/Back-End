<?php
require "functions.php";

$mahasiswa =  query("SELECT * FROM mahasiswa");
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
    <h1>Daftar mahasiswa</h1>

    <button type="submit" class="btn btn-primary"><a href="tambah.php" style="color:white; text-decoration:none">Tambah Data</a></button>

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
            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $mhs) :
            ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td>
                        <a href="update.php?id=<?php echo $mhs["id"]; ?>">Update</a>
                        <a href="delete.php?id=<?php echo $mhs["id"]; ?>" onclick="return confirm('Do you want to delete this data ?');">Delete</a>
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