<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
$sql = "DELETE FROM obat WHERE kodeobat = '" . $_POST['kodeobat'] . "'";
$result = $mysqli->query($sql);
echo json_encode([$_POST['kodeobat']], JSON_PRETTY_PRINT);
?>