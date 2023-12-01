<?php
require "functions.php";

// Ambil data dari id
$id = $_GET["id"];

// Query data mahasiswa berdasarkan id

$mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];



// Apakah Tombol submit sudah dipencet atau belum
if (isset($_POST["submit"])) {
    // Cek apakah ada data dalam dolar post
    //var_dump($_POST);



    //Cek apakah data berhasil ditambahkan
    //var_dump(mysqli_affected_rows($conn));
    if (update($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diupdate');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diupdate');
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Update Data Mahasiswa</h1>
    <div class="container">
        <div class="form-group" style="text-align:right;">
            <button class="btn btn-success btn-md float-right">
                <a class="text-decoration-none text-white" href="index.php">Kembali Ke Beranda</a>
            </button>
        </div>



        <form action="" method="post">
            <div class="mb-3">
                <input type="hidden" class="form-control" id="id" name="id" required>
            </div>
            <div class="mb-3">
                <label for="nrp" class="form-label">NRP :</label>
                <input type="text" class="form-control" id="nrp" name="nrp" value="<?php echo ["nrp"]; ?>" required>

            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo ["nama"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo ["email"]; ?>" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan :</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo ["jurusan"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar :</label>
                <input type="text" class="form-control" id="gambar" name="gambar" value="<?php echo ["gambar"]; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>