<?php

// Import file config untuk koneksi ke database
require('dbconfig.php');

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

// Validasi form
if ($username == "" || $password == "" || $password2 == "") {
    header("location:daftar_admin.php?pesan=gagal");
    // Menghentikan proses ke bawah
    die;
}

// Jika password dan ulangi password tidak cocok
if ($password != $password2) {
    header("location:daftar_admin.php?pesan=password");
    // Menghentikan proses ke bawah
    die;
}

// Cek apakah username sudah terdaftar
$data = mysqli_query($mysqli, "SELECT * FROM admin WHERE username='$username'");
$cek = mysqli_num_rows($data);

// Jika username sudah ada, kembalikan ke form pendaftaran
if ($cek > 0) {
    header("location:daftar_admin.php?pesan=username");
    // Menghentikan proses ke bawah
    die;
}

// Enkripsi password menggunakan SHA1
$password_new = sha1($password);

// Menyimpan data admin baru ke dalam database
$result = mysqli_query($mysqli, "INSERT INTO `admin` (`username`, `password`) VALUES ('$username', '$password_new')");

if ($result) {
    // Jika berhasil, redirect ke halaman login
    header("location:login.php");
    exit;
} else {
    // Jika terjadi kesalahan, tampilkan pesan error
    echo "Error: " . "<br>" . mysqli_error($mysqli);
}
