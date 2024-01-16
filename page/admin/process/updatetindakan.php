<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';

$sql = "UPDATE tindakan SET keterangan = '" . $_POST['keterangan'] . "', harga = '" . $_POST['harga'] . "' WHERE idtindakan = '" . $_POST['idtindakan'] . "'";
// $result = $mysqli->query($sql); 
if (!$mysqli -> query($sql)){
    $data = "Error description: " . $mysqli -> error;
}else{
    $data = "success";
}
echo json_encode($data, JSON_PRETTY_PRINT);
?>