<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
if($_GET['rmpasien'] == '')
{
    $sql = "SELECT * FROM pasien Order By rmpasien asc";
}else{
    $sql = "SELECT * FROM pasien where rmpasien = '". $_GET['rmpasien'] ."'";
}
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $json[] = $row;
}
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>