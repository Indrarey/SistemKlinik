<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';

$sql = "SELECT * FROM obat where kodeobat = '" . $_POST['kodeobat'] . "'";
$num = mysqli_num_rows($mysqli -> query($sql));
if($num > 0){
    $data = "Kode Obat Sudah terdaftar";
}else{
    $sql = "INSERT INTO obat (kodeobat,namaobat) VALUES ('" . $_POST['nik'] . 
    "','" . $_POST['namaobat'] . "')";
    // $result = $mysqli->query($sql);
    if (!$mysqli -> query($sql)){
        $data = "Error description: " . $mysqli -> error;
    }else{
        $data = "success";
    }
}
echo json_encode($data, JSON_PRETTY_PRINT);
?>