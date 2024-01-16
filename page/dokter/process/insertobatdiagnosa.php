<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
 
    $jumlah = $_POST['jumlahobat'];
   
    for($i = 1; $i <= $jumlah; $i++){
        $sql = " insert into assessment (idrekammedis, kodeobat, jumlahobat) 
        values ('". $_POST['idrekammedis'] ."', '". $_POST['kodeobat' . $i] ."', '". $_POST['jumlahobatitem' . $i] ."') ";
       
        if (!$mysqli -> query($sql)){
            $data = "Error description: " . $mysqli -> error;
        }else{
            $data = "success";
        }
    }

    $query = " select rmpasien from rekammedis where idrekammedis = '". $_POST['idrekammedis'] ."' ";
    $result = $mysqli->query($query); 
    
    $data = $result->fetch_array();
    $rmpasien = $data["rmpasien"]; 
     
    $sql  = " update kunjungan set status = 'Pembayaran' where rmpasien = '". $rmpasien ."' and status = 'Periksa Dokter'";
 
    if (!$mysqli -> query($sql)){
        $data = "Error description: " . $mysqli -> error;
    }else{
        $data = "success";
    }
 
    echo json_encode($data, JSON_PRETTY_PRINT);
?>