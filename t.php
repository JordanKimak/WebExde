<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $latitude = $data['latitude'];
    $longitude = $data['longitude'];

    // Simpan data lokasi ke database atau file
    // Contoh: simpan ke file
    file_put_contents('tracking_data.txt', "Latitude: $latitude, Longitude: $longitude\n", FILE_APPEND);
    
    // Tampilkan pesan sukses
    echo json_encode(['status' => 'success']);
}
?>
