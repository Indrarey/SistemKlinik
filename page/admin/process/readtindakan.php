<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
if($_GET['idtindakan'] == '')
{
    $sql = "SELECT * FROM tindakan Order By keterangan asc";
}else{
    $sql = "SELECT * FROM tindakan where idtindakan = '". $_GET['idtindakan'] ."'";
} 
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $json[] = $row;
}
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>