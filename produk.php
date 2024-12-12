<?php
include '../koneksi.php';

// Menampilkan respon dalam format JSON
header('Content-Type: application/json');

// Query untuk mendapatkan data produk
$sql = "SELECT * FROM produk";

// Mengeksekusi query
$result = $conn->query($sql);

// Respon default
$res["code"] = 200;

if ($result->num_rows > 0) {
    // Mengambil data produk dalam bentuk array
    $produk = array();
    while ($row = $result->fetch_assoc()) {
        $row["foto"] = "http://localhost/tokoberkah/admin/image/" . $row["foto"];
        array_push($produk, $row);
    }
    $res["data"] = $produk;
} else {
    $res["code"] = 400;
    $res["error"] = "Data tidak ditemukan";
}

// Menampilkan respon dalam format JSON
echo json_encode($res);
?>
