<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
if($_GET['nik'] == '')
{
    $sql = "SELECT * FROM dokter Order By nikdokter asc";
}else{
    $sql = "SELECT NIKDokter, Nama, JenisKelamin, Spesialisasi, DATE_FORMAT(TglMasuk, '%d/%m/%Y') TglMasuk  FROM dokter where nikdokter = '". $_GET['nik'] ."'";
}
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $json[] = $row;
}
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>