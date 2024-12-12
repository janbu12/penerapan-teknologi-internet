<html>
<head>
<title> Contoh String JSON dari Objek PHP </title>
</head>
<body>
<h2> Contoh String JSON dari Objek PHP </h2>

<?php
class mahasiswa
{
    var $NIM;
    var $nama;
    var $alamat;
}

$myobj = new mahasiswa();
//mengisi data kedalam objek
$myobj->NIM = "10101010";
$myobj->nama = "Justin Biner";
$myobj->alamat = "Jl. Dipatiukur No.1";

echo "<hr>";
echo "Objek PHP = ";
print_r($myobj);
echo "<hr>";
$myjsonstr = json_encode($myobj);
echo "String JSON yang dihasilkan = " . $myjsonstr;
?>

</body>
</html>
