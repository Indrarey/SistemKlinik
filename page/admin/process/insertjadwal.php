<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
 
// $sql = "SELECT * FROM jadwal where kodejadwal = '" . $_POST['kodejadwal'] . "'";
// $num = mysqli_num_rows($mysqli -> query($sql));
// if($num > 0){
//     $data = "Kode Jadwal Sudah terdaftar";
// }else{

    $query = "SELECT COALESCE(max(KodeJadwal), '') as kode FROM jadwal";
    $result = $mysqli->query($query); 
    $data = $result->fetch_array();
    $KodeJadwal1 = $data["kode"]; 
    $huruf = "K";
    
    if($KodeJadwal1 == ''){ 
        $KodeJadwal = $huruf . '001';
    }else{

        $urutan = (int) substr($KodeJadwal1, 3, 3);
        
        $urutan++;
             
        $KodeJadwal = $huruf . sprintf("%03s", $urutan);

    }


    $sql = "INSERT INTO jadwal (nikdokter,kodejadwal,hari,jam) VALUES ('" . $_POST['nik'] . 
    "','" . $KodeJadwal . "','" . $_POST['hari'] . "', '" . $_POST['jam'] . "')";
    // $result = $mysqli->query($sql);
    if (!$mysqli -> query($sql)){
        $data = "Error description: " . $mysqli -> error;
    }else{
        $data = "success";
    }
// }
echo json_encode($data, JSON_PRETTY_PRINT);
?>