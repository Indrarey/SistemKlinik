<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';

$sql = "UPDATE signa SET keterangan = '" . $_POST['keterangan'] . "' WHERE idsigna = '" . $_POST['idsigna'] . "'";
// $result = $mysqli->query($sql); 
if (!$mysqli -> query($sql)){
    $data = "Error description: " . $mysqli -> error;
}else{
    $data = "success";
}
echo json_encode($data, JSON_PRETTY_PRINT);
?>