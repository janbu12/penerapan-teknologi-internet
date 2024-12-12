<html>
<head>
<title> Contoh String JSON dari Array PHP </title>
</head>
<body>
<h2> Contoh String JSON dari array PHP </h2>

<?php
$myarray = array("nama" => "Jason");
echo "<hr>";
echo "Array PHP = ";
print_r($myarray);
echo "<hr>";
$myjsonstr = json_encode($myarray);
echo "String JSON yang dihasilkan = " . $myjsonstr;
?>

</body>
</html>
