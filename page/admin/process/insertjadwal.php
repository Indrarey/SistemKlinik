<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
 
$sql = "SELECT * FROM jadwal where kodejadwal = '" . $_POST['kodejadwal'] . "'";
$num = mysqli_num_rows($mysqli -> query($sql));
if($num > 0){
    $data = "Kode Jadwal Sudah terdaftar";
}else{
    $sql = "INSERT INTO jadwal (nikdokter,kodejadwal,hari,jam) VALUES ('" . $_POST['nik'] . 
    "','" . $_POST['kodejadwal'] . "','" . $_POST['hari'] . "', '" . $_POST['jam'] . "')";
    // $result = $mysqli->query($sql);
    if (!$mysqli -> query($sql)){
        $data = "Error description: " . $mysqli -> error;
    }else{
        $data = "success";
    }
}
echo json_encode($data, JSON_PRETTY_PRINT);
?>