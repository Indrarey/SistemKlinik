<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
$sql = "DELETE FROM tindakan WHERE idtindakan = '" . $_POST['idtindakan'] . "'";
$result = $mysqli->query($sql);
echo json_encode([$_POST['idtindakan']], JSON_PRETTY_PRINT);
?>