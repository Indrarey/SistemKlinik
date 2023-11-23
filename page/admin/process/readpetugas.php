<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
if($_GET['nikpetugas'] == '')
{
    $sql = "SELECT * FROM petugas Order By nikpetugas asc";
}else{
    $sql = "SELECT * FROM petugas where nikpetugas = '". $_GET['nikpetugas'] ."'";
}
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $json[] = $row;
}
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>