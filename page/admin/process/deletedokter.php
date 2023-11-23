<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
$sql = "DELETE FROM dokter WHERE kodedokter = '" . $_POST['kodedokter'] . "'";
$result = $mysqli->query($sql);
echo json_encode([$_POST['nik']], JSON_PRETTY_PRINT);
?>