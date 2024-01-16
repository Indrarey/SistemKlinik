<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';

$sql = "UPDATE obat SET namaobat = '" . $_POST['namaobat'] . "', idsigna = '". $_POST['kodesigna'] ."', 
        KodeSupplier = '". $_POST['kodesupplier'] ."', HargaSatuan = '". $_POST['hargasatuan'] ."' WHERE kodeobat = '" . $_POST['kodeobat'] . "'";
// $result = $mysqli->query($sql); 
if (!$mysqli -> query($sql)){
    $data = "Error description: " . $mysqli -> error;
}else{
    $data = "success";
}
echo json_encode($data, JSON_PRETTY_PRINT);
?>