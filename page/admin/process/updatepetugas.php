<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';

$sql = "UPDATE petugas SET nama = '" . $_POST['nama'] . "', jeniskelamin = '" . $_POST['jeniskelamin'] . "', tglmasuk = '" . $_POST['tglmasuk'] . "' WHERE nikpetugas = '" . $_POST['nikpetugas'] . "'";
// $result = $mysqli->query($sql); 
if (!$mysqli -> query($sql)){
    $data = "Error description: " . $mysqli -> error;
}else{
    $data = "success";
}
echo json_encode($data, JSON_PRETTY_PRINT);
?>