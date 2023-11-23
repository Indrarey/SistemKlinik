<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
if($_GET['kodepasien'] == '')
{
    $sql = "SELECT * FROM pasien Order By kodepasien asc";
}else{
    $sql = "SELECT * FROM pasien where kodepasien = '". $_GET['kodepasien'] ."'";
}
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $json[] = $row;
}
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>