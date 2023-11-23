<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';

$tgl =  date("Y-m-d", strtotime($_POST['tglmasuk']) );
$sql = "SELECT * FROM dokter where nik = '" . $_POST['nik'] . "'";
$num = mysqli_num_rows($mysqli -> query($sql));
if($num > 0){
    $data = "NIK Sudah terdaftar";
}else{
    $query = "SELECT max(KodeDokter) as kode FROM dokter";
    $result = $mysqli->query($sql); 
    $data = $result->fetch_array();
    $KodeDokter = $data["kode"]; 
        
    $urutan = (int) substr($KodeDokter, 3, 3);
        
    $urutan++;
         
    $huruf = "D";
    $KodeDokter = $huruf . sprintf("%03s", $urutan);
    
    $sql = "INSERT INTO dokter (kodedokter, nikdokter, nama,jeniskelamin,spesialisasi,tglmasuk) VALUES ('" . $KodeDokter . 
    "','" . $_POST['nik'] . "','" . $_POST['nama'] . "','" . $_POST['jeniskelamin'] . "','" . $_POST['spesialisasi'] . "','" . $tgl . "')";
    // $result = $mysqli->query($sql);
    if (!$mysqli -> query($sql)){
        $data = "Error description: " . $mysqli -> error;
    }else{
        $data = "success";
    }
}
echo json_encode($data, JSON_PRETTY_PRINT);
?>