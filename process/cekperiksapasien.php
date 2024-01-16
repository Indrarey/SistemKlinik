<?php
header("Content-type:application/json");
require '../config/koneksi.php';
  
$sql = "SELECT 
        (select count(*) FROM kunjungan where status = 'Periksa Dokter') JumlahPasien,
        (select count(*) from kunjungan where status = 'Pembayaran') JumlahPasienPembayaran ";
 
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $json[] = $row;
}
$data['data'] = $json;

echo json_encode($data, JSON_PRETTY_PRINT); 
?>