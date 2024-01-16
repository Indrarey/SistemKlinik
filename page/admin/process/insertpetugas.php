<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';

$tgl = explode("/", $_POST['tglmasuk']); 
$tglmasuk =  $tgl[2] ."-".$tgl[1]."-".$tgl[0];
$sql = "SELECT * FROM petugas where nikpetugas = '" . $_POST['nikpetugas'] . "'";
$num = mysqli_num_rows($mysqli -> query($sql));
if($num > 0){
    $data = "NIK Sudah terdaftar";
}else{
    $sql = "INSERT INTO petugas (nikpetugas,nama,jeniskelamin,tglmasuk) VALUES ('" . $_POST['nikpetugas'] . 
    "','" . $_POST['nama'] . "','" . $_POST['jeniskelamin'] . "', '" . $tglmasuk . "')";
    // $result = $mysqli->query($sql);
    if (!$mysqli -> query($sql)){
        $data = "Error description: " . $mysqli -> error;
    }else{
        $data = "success";
    }
}
echo json_encode($data, JSON_PRETTY_PRINT);
?>