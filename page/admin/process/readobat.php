<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
if($_GET['kodeobat'] == '')
{
    $sql = "SELECT * FROM obat Order By kodeobat asc";
}else{
    $sql = "SELECT * FROM obat where kodeobat = '". $_GET['kodeobat'] ."'";
}
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $json[] = $row;
}
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>