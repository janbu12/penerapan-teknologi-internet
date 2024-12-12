 <html>
 <head>
 <title> Contoh String JSON untuk di-Decode </title>
 </head>
 <body>
 <h2> Contoh String JSON untuk di-Decode </h2>

 <?php
 $myjsonstr='{"nama":"Jason"}';
 echo "<hr>";
 echo "String Json = ".$myjsonstr;
 echo "<hr>";
 $myjsonobj = json_decode($myjsonstr);
 print_r($myjsonobj);
 echo "<hr>";
 echo "Nama dari JSON = ".$myjsonobj->nama;
 ?>

 </body>
</html>