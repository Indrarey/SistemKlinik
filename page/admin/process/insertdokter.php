<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
 

$tgl = explode("/", $_POST['tglmasuk']); 
$tglmasuk =  $tgl[2] ."-".$tgl[1]."-".$tgl[0];
$sql = "SELECT * FROM dokter where nikdokter = '" . $_POST['nik'] . "'";
$num = mysqli_num_rows($mysqli -> query($sql));
if($num > 0){
    $data = "NIK Sudah terdaftar";
}else{
    $query = "SELECT COALESCE(max(KodeDokter), '') as kode FROM dokter";
    $result = $mysqli->query($query); 
    $data = $result->fetch_array();
    $KodeDokter1 = $data["kode"]; 
    $huruf = "D";
    
    if($KodeDokter1 == ''){ 
        $KodeDokter = $huruf . '001';
    }else{

        $urutan = (int) substr($KodeDokter1, 3, 3);
        
        $urutan++;
             
        $KodeDokter = $huruf . sprintf("%03s", $urutan);

    }
    
    $sql = "INSERT INTO dokter (kodedokter, nikdokter, nama,jeniskelamin,spesialisasi,tglmasuk) VALUES ('" . $KodeDokter . 
    "','" . $_POST['nik'] . "','" . $_POST['nama'] . "','" . $_POST['jeniskelamin'] . "','" . $_POST['dokterspesialis'] . "','" . $tglmasuk . "')";
    // $result = $mysqli->query($sql);
    if (!$mysqli -> query($sql)){
        $data = "Error description: " . $mysqli -> error;
    }else{
        // var_dump('succ');
        $data = "success";
    }
}
echo json_encode($data, JSON_PRETTY_PRINT);
?>