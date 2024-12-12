<html>
<head>
<title> Halaman Untuk Mengirim String JSON </title>
</head>
<body>
<h2> Halaman Untuk Mengirim String JSON </h2>

<form method="post" action="json_read.php">
STRING JSON :
<br>
<textarea name="jsonstr" rows="5" cols="80">
{
"mahasiswa" : [{"NIM":"10101010","nama":"Justin Biner","alamat":"Jl. Dipatiukur No.1"}]
}
</textarea>
<br>
<input type="submit" value="Kirim JSON">
</form>

</body>
</html>
