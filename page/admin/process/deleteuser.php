<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
$sql = "DELETE FROM user WHERE kodeuser = '" . $_POST['kodeuser'] . "'";
$result = $mysqli->query($sql);
echo json_encode([$_POST['kodeuser']], JSON_PRETTY_PRINT);
?>