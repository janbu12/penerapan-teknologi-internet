<?php
include "koneksi.php";

$link = koneksi_db();
$sql = "select * from mahasiswa";
$res = mysqli_query($link, $sql);

while ($data = mysqli_fetch_assoc($res)) {
    $anggota[] = $data;
}

echo json_encode($anggota, 128);
mysqli_close($link);
?>
