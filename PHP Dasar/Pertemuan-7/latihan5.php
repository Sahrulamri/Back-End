<?php
function hitungEnergiKinetik($massa, $kecepatan)
{
    $energiKinetik = 0.5 * $massa * pow($kecepatan, 2);
    return $energiKinetik;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $massa = $_POST["massa"];
    $kecepatan = $_POST["kecepatan"];

    $energiKinetik = hitungEnergiKinetik($massa, $kecepatan);
    //echo "Energi Kinetik: " . $energiKinetik . " joule";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Menghitung Energi Kinetik</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Menghitung Energi Kinetik</h2>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="mb-3">
                <label class="form-label">Massa (kg):</label>
                <input type="number" class="form-control" name="massa" step="0.01" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Kecepatan (m/s):</label>
                <input type="number" class="form-control" name="kecepatan" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
            <div class="mt-3">
                <?php echo "Energi Kinetik: " . $energiKinetik . " joule"; ?>
            </div>
        <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>