<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';

$sql = "UPDATE dokter SET nama = '" . $_POST['nama'] . "', jeniskelamin = '" . $_POST['jeniskelamin'] . "', dokterspesialis = '" . $_POST['dokterspesialis'] . "', tglmasuk = '" . $_POST['tglmasuk'] . "' WHERE nik = '" . $_POST['nik'] . "'";
// $result = $mysqli->query($sql); 
if (!$mysqli -> query($sql)){
    $data = "Error description: " . $mysqli -> error;
}else{
    $data = "success";
}
echo json_encode($data, JSON_PRETTY_PRINT);
?>