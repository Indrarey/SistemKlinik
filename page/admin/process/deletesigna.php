<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
$sql = "DELETE FROM signa WHERE idsigna = '" . $_POST['idsigna'] . "'";
$result = $mysqli->query($sql);
echo json_encode([$_POST['idsigna']], JSON_PRETTY_PRINT);
?>