<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
 
    $sql = "INSERT INTO tindakan (keterangan,harga) VALUES ('" . $_POST['keterangan'] . 
    "','" . $_POST['harga'] . "')";
    // $result = $mysqli->query($sql);
    if (!$mysqli -> query($sql)){
        $data = "Error description: " . $mysqli -> error;
    }else{
        $data = "success";
    } 
echo json_encode($data, JSON_PRETTY_PRINT);
?>