<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
    
    if($_POST['jabatan'] == 'Dokter')
    {
        $query = "SELECT nama FROM dokter where nikdokter = '" . $_POST['namauser'] . "'";
        $result = $mysqli->query($query); 
        $data = $result->fetch_array();
        $nama = $data['nama']; 

        $sql = "INSERT INTO user (KodeUser, NamaUser, NikDokter, Password) VALUES ('" . $_POST['kodeuser'] . 
        "','" .  $nama . "', '" . $_POST['namauser'] . "', md5('" . $_POST['password'] . "'))";    
    }else{    
        $query = "SELECT nama FROM petugas where nikpetugas = '" . $_POST['namauser'] . "'";
        $result = $mysqli->query($query); 
        $data = $result->fetch_array();
        $nama = $data['nama'];

        $sql = "INSERT INTO user (KodeUser, NamaUser, KodePetugas, Password) VALUES ('" . $_POST['kodeuser'] . 
        "','" .  $nama . "','" . $_POST['namauser'] . "', md5('" . $_POST['password'] . "'))";
    }
     if (!$mysqli -> query($sql)){
        $data = "Error description: " . $mysqli -> error;
    }else{
        $data = "success";
    } 
echo json_encode($data, JSON_PRETTY_PRINT);
?>