<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
$sql = "DELETE FROM pasien WHERE kodepasien = '" . $_POST['kodepasien'] . "'";
$result = $mysqli->query($sql);
echo json_encode([$_POST['nik']], JSON_PRETTY_PRINT);
?>