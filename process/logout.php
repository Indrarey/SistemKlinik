<?php
session_start();
header("Content-type:application/json");
require '../config/koneksi.php';
 

unset($_SESSION['userkode']);
unset($_SESSION['jabatan']);
$data = 'success';

echo json_encode($data, JSON_PRETTY_PRINT);
?>