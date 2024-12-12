<!DOCTYPE html>
<html>
<head>
    <title>Fashion</title>
</head>
<body>
    <h1>Berkah Fashion - Cabang Dago</h1>
    
    <!-- Form to input URL -->
    <form action="#" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td width="100px">Url</td>
                <td><input type="text" name="url" placeholder="Masukkan URL"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Load" name="submit"/></td>
            </tr>
        </table>
    </form>
    
    <?php
    if (isset($_POST["submit"])) {
        $url = $_POST["url"];
        
        // Initialize cURL session
        $ch = curl_init();
        
        // Set the URL to be loaded
        curl_setopt($ch, CURLOPT_URL, $url);
        
        // Return the result as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        // Execute the cURL session
        $output = curl_exec($ch);
        
        // Close the cURL session
        curl_close($ch);
        
        // Decode the JSON output into a PHP object
        $result = json_decode($output);
        
        if ($result && isset($result->data) && count($result->data) > 0) {
            // Display product data in a table
            echo "<table border='1'>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                    </tr>";
            
            $i = 0;
            foreach ($result->data as $row) {
                $i++;
                echo "<tr>
                        <td><center>$i</center></td>
                        <td><img width='50px' src='" . $row->foto . "' alt='Product Image'/></td>
                        <td>" . $row->nama_produk . "</td>
                        <td>Rp" . number_format($row->harga, 0, '.', '.') . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No data found or invalid URL.</p>";
        }
    }
    ?>
</body>
</html>
