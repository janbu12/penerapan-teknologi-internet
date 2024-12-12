<?php
$url = "https://tokobandung221.000webhostapp.com/admin/api/produk.php";

// Initialize curl
$ch = curl_init();
// Set the URL to fetch
curl_setopt($ch, CURLOPT_URL, $url);
// Return data as a string instead of direct output
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// Execute curl
$output = curl_exec($ch);

// Decode the JSON response into an object
$result = json_decode($output);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fashion</title>
</head>
<body>
    <h1>Toko Baju</h1>
    <table>
        <?php
        // Initialize row number
        $i = 0;

        // Check if result has data
        if (count($result->data) > 0) {
            // Loop through the products and display them
            foreach ($result->data as $row) {
                $i++;
                echo ' 
                <tr>
                    <td width="30px"><center>' . $i . '</center></td>
                    <td><img width="50px" src="' . $row->foto . '"/></td>
                    <td width="200px">' . $row->nama_produk . '</td>
                    <td width="100px">Rp' . number_format($row->harga, 0, '.', '.') . '</td>
                    <td>
                        <button onclick="hapus(' . $row->id_produk . ', `' . $row->nama_produk . '`)">Hapus</button>
                    </td>
                </tr>';
            }
        }
        ?>
    </table>
    <script>
    // Function to delete product
    function hapus(id, nama_produk) {
        if (confirm('Apakah anda yakin ' + nama_produk + ' akan di hapus? ')) {
            // Redirect to the deletion URL
            window.location.replace("https://tokobandung221.000webhostapp.com/admin/api/hapus.php?id=" + id);
        }
    }
    </script>
</body>
</html>
