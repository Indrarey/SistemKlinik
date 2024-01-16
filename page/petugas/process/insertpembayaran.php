<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
 
    $query = "SELECT max(KodePembayaran) as kode FROM pembayaran";
    $result = $mysqli->query($query); 
    
    $data = $result->fetch_array();
    $kodepembayaran = $data["kode"]; 
    $urutan = (int) substr($kodepembayaran, 0, 8);
    $urutan++; 
          
    $kodepembayaran = sprintf("%08s", $urutan);
    
   
    date_default_timezone_set("UTC");
    $tglnow =  date('Y-m-d H:i:s', time());
 
    $sql = "INSERT INTO pembayaran (KodePembayaran,IdKunjungan,TotalPembayaran,TglPembayaran,UangPembayaran) VALUES ('" . $kodepembayaran . 
    "','" . $_POST['idkunjungan'] . "','" . $_POST['totalpembayaran'] . "','" . $tglnow . "','" . $_POST['uangpembayaran'] . "')";
    
    if (!$mysqli -> query($sql)){
        $data = "Error description: " . $mysqli -> error;
    }else{
        $data = "success";
    } 

    echo json_encode($data, JSON_PRETTY_PRINT);
?>