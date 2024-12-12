<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tokoberkah";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function getBaseUrl($page = "")
{
    // output: /myproject/index.php
    $currentPath = $_SERVER['PHP_SELF'];

    // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index )
    $pathInfo = pathinfo($currentPath);

    // output: localhost
    $hostName = $_SERVER['HTTP_HOST'];

    // output: http:// or https://
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, 5)) == 'https' ? 'https' : 'http';

    // return: http://localhost/myproject/
    return $protocol . '://' . $hostName . $pathInfo['dirname'] . "/" . $page;
}

function jsonResponse($code, $msg, $data = null)
{
    // set kode response
    http_response_code($code);
    
    // set respon data format JSON
    header('Content-Type: application/json');
    $status = array(
        200 => '200 OK',
        400 => '400 Bad Request',
    );

    // validasi sukses atau error
    header('Status: ' . $status[$code]);

    // return the encoded json
    $res["success"] = $code == 200;
    $res["message"] = "$msg";

    if ($data != null) {
        $res["data"] = $data;
    }

    // send response
    echo json_encode($res);
}
?>
