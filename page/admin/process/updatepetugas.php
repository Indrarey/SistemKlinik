<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';

$tgl = explode("/", $_POST['tglmasuk']); 
$tglmasuk =  $tgl[2] ."-".$tgl[1]."-".$tgl[0];
$sql = "UPDATE petugas SET nama = '" . $_POST['nama'] . "', jeniskelamin = '" . $_POST['jeniskelamin'] . "', tglmasuk = '" . $tglmasuk . "' WHERE nikpetugas = '" . $_POST['nikpetugas'] . "'";
// $result = $mysqli->query($sql); 
if (!$mysqli -> query($sql)){
    $data = "Error description: " . $mysqli -> error;
}else{
    $data = "success";
}
echo json_encode($data, JSON_PRETTY_PRINT);
?>