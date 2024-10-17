<?php
// Ambil password dari form pendaftaran
$password = $_POST['password'];

// Enkripsi password menggunakan bcrypt
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Simpan $hashed_password ke database
$sql = "INSERT INTO login (username, password, nama) VALUES ('$username', '$hashed_password', '$nama')";
$result = mysqli_query($conn, $sql);
