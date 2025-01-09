<?php
// Set URL untuk mengirim pesan ke FCM API
$url = 'https://fcm.googleapis.com/fcm/send';
// Tentukan kunci server untuk otentikasi
$server_key = 'api key dari project anda';
// Set pesan notifikasi sederhana
$message = array(
    'data' => array(
        'title' => 'Notifikasi',
        'body' => 'Notifikasi telah berhasil dikirimkan.'
    ),
    'registration_ids' => [
        'token-perangkat-tujuan'
    ],
);
// Set opsi tambahan cURL
$options = array(
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => array(
        'Authorization: key=' . $server_key,
        'Content-Type: application/json',
    ),
    CURLOPT_POSTFIELDS => json_encode($message),
    CURLOPT_RETURNTRANSFER => true, // Mengaktifkan pengembalian respons dari cURL
    );
    // Buat sumber daya cURL baru dan atur opsi
    $curl = curl_init();
    curl_setopt_array($curl, $options);
    // Kirim permintaan HTTP dan dapatkan respons
    $response = curl_exec($curl);
    // Periksa kesalahan
    if ($response === false) {
        echo 'Kesalahan mengirim pesan';
    } else {
        echo 'Notifikasi berhasil terkirim';
    }
    // Tutup sumber daya cURL
    curl_close($curl);
    