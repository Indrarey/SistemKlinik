<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
$tgl = explode("/", $_POST['tgllahir']); 
$tgllahir =  $tgl[2] ."-".$tgl[1]."-".$tgl[0];
$sql = "SELECT * FROM pasien where NamaLengkap = '" . $_POST['nama'] . "' and tgllahirpasien = '". $_POST['tgllahir'] ."' and norekammedis = '". $_POST['norekammedis'] ."'";

$result = $mysqli->query($sql); 

if ($result->num_rows > 0) { 
    $data = "Pasien Sudah terdaftar";
}else{
     
    $query = "SELECT max(RmPasien) as kode FROM pasien";
    $result = $mysqli->query($query); 
    
    $data = $result->fetch_array();
    $kodepasien = $data["kode"]; 
        
    $urutan = (int) substr($kodepasien, 3, 3);
    $urutan++; 
         
    $huruf = "P";
    $kodepasien = $huruf . sprintf("%03s", $urutan);
    
   
    date_default_timezone_set("UTC");
    $tglnow =  date('Y-m-d H:i:s', time());
 
    $sql = "INSERT INTO pasien (RmPasien,NamaLengkap,JenisKelaminpasien,Alamatpasien,TglLahirpasien,NoIdentitas,NoAntrian,NoHP,Penjamin,NoRekamMedis,TglDaftar) VALUES ('" . $kodepasien . 
    "','" . $_POST['nama'] . "','" . $_POST['jeniskelamin'] . "','" . $_POST['alamat'] . "','" . $tgllahir . "','" . $_POST['noktp'] . "','" . $_POST['noantrian'] . "','" . $_POST['nohp'] . "','" . $_POST['penjamin'] . "','" . $_POST['norekammedis'] . "','" . $tglnow . "')";
    
    if (!$mysqli -> query($sql)){
        $data = "Error description: " . $mysqli -> error;
    }else{
        $data = "success";
    }
}
echo json_encode($data, JSON_PRETTY_PRINT);
?>