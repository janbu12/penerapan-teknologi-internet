<?php
// membuka file JSON
$file = file_get_contents('http://localhost/folderAnda/api/json_konversi.php');
$json = json_decode($file, true);

foreach ($json as $key) {
    if (is_array($key)) {
        foreach ($key as $key => $value) {
            echo $key . ' : ' . $value . '<br />';
        }
    }
    echo "<br>";
}
?>
