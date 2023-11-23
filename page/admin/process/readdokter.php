<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
if($_GET['nik'] == '')
{
    $sql = "SELECT * FROM dokter Order By nik asc";
}else{
    $sql = "SELECT * FROM dokter where nik = '". $_GET['nik'] ."'";
}
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $json[] = $row;
}
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>