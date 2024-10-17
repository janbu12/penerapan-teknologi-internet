<html>

<head>
    <title>Daftar Admin</title>
</head>
<center>
    <body>
        <form action="proses_daftar_admin.php" method="post">
            <h1>FORM DAFTAR ADMIN</h1>
            <h2>Universitas Komputer Indonesia</h2>
            <hr>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" size="20"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" size="20"></td>
                </tr>
                <tr>
                    <td>Ulangi Password</td>
                    <td><input type="password" name="password2" size="20"></td>
                </tr>
            </table>
            <hr>
            <input type="submit" value="Simpan"> 
            <input type="reset" value="Reset">
            <br>
            <a href="login.php">Kembali Login</a>
        </form>

        <?php
        if (!empty($_GET["pesan"])) {
            //jika pesan gagal
            if ($_GET["pesan"] == "gagal") {
                echo "<p>Username dan Password wajib diisi</p>";
            } else if ($_GET["pesan"] == "password") {
                echo "<p>Password tidak cocok</p>";
            } else if ($_GET["pesan"] == "username") {
                echo "<p>Username sudah terdaftar</p>";
            }
        }
        ?>
    </body>
</center>
</html>
