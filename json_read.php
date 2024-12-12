<html>
<head>
<title> Baca Data JSON dikirim browser </title>
</head>
<body>
<h2> Baca Data JSON dikirim browser </h2>

<?php
$myjsonstr = $_POST["jsonstr"];
echo "<hr>";
echo "String JSON = " . $myjsonstr;
echo "<hr>";
$myjsonobj = json_decode($myjsonstr);
print_r($myjsonobj);
echo "<hr>";
echo "Nama dari JSON = " . $myjsonobj->mahasiswa[0]->nama;
?>

</body>
</html>
