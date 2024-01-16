<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
$sql = "DELETE FROM supplier WHERE kodesupplier = '" . $_POST['kodesupplier'] . "'";
$result = $mysqli->query($sql);
echo json_encode([$_POST['kodesupplier']], JSON_PRETTY_PRINT);
?>