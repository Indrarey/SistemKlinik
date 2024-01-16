<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
$tgl = explode("/", $_POST['tgllahir']); 
$tgllahir =  $tgl[2] ."-".$tgl[1]."-".$tgl[0];
$sql = "SELECT * FROM pasien where NamaLengkap = '" . $_POST['nama'] . "' and tgllahirpasien = '". $tgllahir ."'";
 
$result = $mysqli->query($sql); 

$sql2 = "SELECT * FROM pasien where NamaLengkap = '" . $_POST['nama'] . "' and noidentitas = '". $_POST['noktp'] ."'";
 
$result2 = $mysqli->query($sql2); 

if ($result2->num_rows > 0) { 
    $data = "Pasien Sudah terdaftar dengan No KTP yang sama";
}else if ($result->num_rows > 0) { 
    $data = "Pasien Sudah terdaftar dengan tanggal lahir yang sama";
} else{
     
    $query = "SELECT max(RmPasien) as kode FROM pasien";
    $result = $mysqli->query($query); 
    
    $data = $result->fetch_array();
    $kodepasien = $data["kode"]; 
    $urutan = (int) substr($kodepasien, 0, 8);
    $urutan++; 
          
    $kodepasien = sprintf("%08s", $urutan);
    
   
    date_default_timezone_set("UTC");
    $tglnow =  date('Y-m-d H:i:s', time());
 
    $sql = "INSERT INTO pasien (RmPasien,NamaLengkap,JenisKelaminpasien,Alamatpasien,TglLahirpasien,NoIdentitas,NoHP,TglDaftar) VALUES ('" . $kodepasien . 
    "','" . $_POST['nama'] . "','" . $_POST['jeniskelamin'] . "','" . $_POST['alamat'] . "','" . $tgllahir . "','" . $_POST['noktp'] . "','" . $_POST['nohp'] . "','" . $tglnow . "')";
    
    if (!$mysqli -> query($sql)){
        $data = "Error description: " . $mysqli -> error;
    }else{
        $data = "success";
    }
}
echo json_encode($data, JSON_PRETTY_PRINT);
?>