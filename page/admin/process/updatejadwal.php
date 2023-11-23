<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';

$sql = "UPDATE jadwal SET hari = '" . $_POST['hari'] . "', jam = '" . $_POST['jam'] . "', ruangan = '" . $_POST['ruangan'] . "' WHERE nik = '" . $_POST['nik'] . "' and kodejadwal = '" . $_POST['kodejadwal'] . "' ";
// $result = $mysqli->query($sql); 
if (!$mysqli -> query($sql)){
    $data = "Error description: " . $mysqli -> error;
}else{
    $data = "success";
}
echo json_encode($data, JSON_PRETTY_PRINT);
?>