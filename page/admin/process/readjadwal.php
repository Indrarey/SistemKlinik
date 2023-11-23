<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';

if($_GET['nik'] != '')
{
    $whereData = "nik = '". $_GET['nik'] ."'";
}else
{
    $whereData = "kodejadwal = '". $_GET['kodejadwal'] ."'";
}

$sql = "SELECT KodeJadwal, Hari, Jam, Ruangan FROM jadwal where ". $whereData ."";
// var_dump($sql);
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
        $json[] = $row;
}  

$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>