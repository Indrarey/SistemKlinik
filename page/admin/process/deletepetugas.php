<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
$sql = "DELETE FROM petugas WHERE nikpetugas = '" . $_POST['nikpetugas'] . "'";
$result = $mysqli->query($sql);
echo json_encode([$_POST['nikpetugas']], JSON_PRETTY_PRINT);
?>