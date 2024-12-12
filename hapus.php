<?php
include '../koneksi.php';

// Hapus data produk berdasarkan ID
$sql = "DELETE FROM produk WHERE id_produk = " . $_GET["id"];
if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/tokoberkah/cimahi/");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
