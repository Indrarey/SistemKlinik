<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';

$sql = "UPDATE supplier SET namasupplier = '" . $_POST['namasupplier'] . "' WHERE kodesupplier = '" . $_POST['kodesupplier'] . "'";
// $result = $mysqli->query($sql); 
if (!$mysqli -> query($sql)){
    $data = "Error description: " . $mysqli -> error;
}else{
    $data = "success";
}
echo json_encode($data, JSON_PRETTY_PRINT);
?>