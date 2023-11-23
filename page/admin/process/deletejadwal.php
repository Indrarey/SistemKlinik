<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
$sql = "DELETE FROM jadwal WHERE kodejadwal = '" . $_POST['kodejadwal'] . "'";
$result = $mysqli->query($sql);
echo json_encode($_POST['kodejadwal'], JSON_PRETTY_PRINT);
?>