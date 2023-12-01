<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = [];
    while ($mhs = mysqli_fetch_assoc($result)) {
        $row[] = $mhs;
    }
    return $row;
}

function tambah($post)
{
    global $conn;
    // Ambil data dan simpan di variabel
    htmlspecialchars($nrp = $post["nrp"]);
    htmlspecialchars($nama = $post["nama"]);
    htmlspecialchars($email = $post["email"]);
    htmlspecialchars($jurusan = $post["jurusan"]);
    htmlspecialchars($gambar = $post["gambar"]);

    //Inisialisasi Variabel query yang berisi insert query
    $query = "INSERT INTO mahasiswa VALUES (
            '',
            '$nrp',
            '$nama',
            '$email',
            '$jurusan',
            '$gambar'
        )";

    // Query insert data
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function update($post)
{
    global $conn;
    // Ambil data dan simpan di variabel
    $id = $post["id"];
    htmlspecialchars($nrp = $post["nrp"]);
    htmlspecialchars($nama = $post["nama"]);
    htmlspecialchars($email = $post["email"]);
    htmlspecialchars($jurusan = $post["jurusan"]);
    htmlspecialchars($gambar = $post["gambar"]);

    //Inisialisasi Variabel query yang berisi insert query
    $query = "UPDATE mahasiswa SET
            nrp ='$nrp',
            nama ='$nama',
            email ='$email',
            jurusan ='$jurusan',
            gambar = '$gambar'
            WHERE id = $id;
        ";

    // Query insert data
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
