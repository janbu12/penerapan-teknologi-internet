<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fashion</title>
</head>
<body>
    <h1>Ubah Baju</h1>

    <?php
    if (isset($_GET["id"])) {
        // Ambil data produk berdasarkan ID
        $sql = "SELECT * FROM produk WHERE id_produk = " . $_GET["id"];
        $result = $conn->query($sql);
        $produk = mysqli_fetch_assoc($result);
    }

    if (isset($_POST["submit"])) {
        // Ubah data produk
        $nama = $_POST["nama"];
        $harga = $_POST["harga"];
        $id = $_POST["id"];

        $sql = "UPDATE produk SET nama_produk = '$nama', harga = '$harga' WHERE id_produk = " . $id;
        if ($conn->query($sql) === TRUE) {
            header('Location: ' . getBaseUrl());
        } else {
            echo mysqli_error($conn);
        }
    }
    ?>

    <form action="#" method="post">
        <input type="hidden" name="id" value="<?= $produk['id_produk'] ?>">
        <table>
            <tr>
                <td width="100px">Nama</td>
                <td><input type="text" name="nama" placeholder="Masukkan nama produk" value="<?= $produk['nama_produk'] ?>"></td>
            </tr>
            <tr>
                <td width="100px">Harga</td>
                <td><input type="text" name="harga" placeholder="Masukkan harga produk" value="<?= $produk['harga'] ?>"></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Ubah" name="submit"/>
    </form>

    <script>
    function hapus() {
        if (confirm('Apakah anda yakin ?')) {
            alert('Hapus');
        }
    }
    </script>
</body>
</html>
