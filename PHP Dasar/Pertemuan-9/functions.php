<?php
// Connect Database
$conn = mysqli_connect("localhost", "root", "", "phpdasar",);

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
