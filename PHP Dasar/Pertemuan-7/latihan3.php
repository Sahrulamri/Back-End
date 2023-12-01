<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<body>
    <?php if (isset($_POST["submit"])) : ?>
        <h1>Selamat Datang, <?php echo $_POST["nama"]; ?></h1>
    <?php endif; ?>
    <h1>Form Login</h1>
    <form action="latihan4.php" method="post">
        <label for="username">
            Username:
        </label><br>
        <input type="text" value="" id="username" name="nama"> <br>
        <label for="pass">
            Password :
        </label> <br>
        <input type="password" id="password" name="password">
        <button type="submit" name="submit">Login</button>
    </form>
</body>

</html>