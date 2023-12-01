<?php
// Cek apakah tombol submit sudah dipencet atau belum
if (isset($_POST["submit"])) {
    // cek apakah password dan username benar
    if ($_POST["username"] == "admin" && $_POST["pass"] == "123") {
        // Jika password & username benar
        header("Location : admin.php");
        exit;
    } else {
        // Jika password dan username salah
        $error = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman login</title>
</head>

<?php if (isset($error)) : ?>
    <p style="color:red; font-style:italic;">Maaf Password / Username Anda salah</p>
<?php endif; ?>

<body>
    <h1>Form Login</h1>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username :</label> <br>
                <input type="text" id="username" name="username">
            </li>
            <li>
                <label for="pass">Password :</label> <br>
                <input type="password" id="pass" name="pass">
            </li>
            <button type="submit" name="submit" style="margin-top : 10px;">Submit</button> <br>
        </form>
    </ul>
</body>

</html>