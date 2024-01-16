<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';

$tgl = explode("/", $_POST['tglmasuk']); 
$tglmasuk =  $tgl[2] ."-".$tgl[1]."-".$tgl[0];
$sql = "UPDATE dokter SET nama = '" . $_POST['nama'] . "', jeniskelamin = '" . $_POST['jeniskelamin'] . "', spesialisasi = '" . $_POST['dokterspesialis'] . "', tglmasuk = '" . $tglmasuk. "' WHERE nikdokter = '" . $_POST['nik'] . "'";
// $result = $mysqli->query($sql); 
if (!$mysqli -> query($sql)){

    $data = "Error description: " . $mysqli -> error;
}else{
    $data = "success";
}
echo json_encode($data, JSON_PRETTY_PRINT);
?>