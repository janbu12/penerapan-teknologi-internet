<html>
<head>
<title> Contoh String JSON untuk di-decode menjadi array </title>
</head>
<body>
<h2> Contoh String JSON untuk di-decode menjadi array </h2>

<?php
$myjsonstr='{"nama":"Jason"}';
echo "<hr>";
echo "String Json = ".$myjsonstr;
echo "<hr>";
$myjsonarr=json_decode($myjsonstr,true);
print_r($myjsonarr);
echo "<hr>";
