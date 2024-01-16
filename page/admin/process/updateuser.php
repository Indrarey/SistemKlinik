<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
    
    if($_POST['jabatan'] == 'Dokter')
    {
        $query = "SELECT nama FROM dokter where nikdokter = '" . $_POST['namauser'] . "'";
        $result = $mysqli->query($query); 
        $data = $result->fetch_array();
        $nama = $data['nama']; 
        if($_POST['password'] == ''){
            $sql = "update user set 
            NamaUser = '" .  $nama . "', 
            NikDokter= '" . $_POST['namauser'] . "',
            where kodeuser = '" . $_POST['kodeuser'] . "' ";    
        
        }else{
            $sql = "update user set 
            NamaUser = '" .  $nama . "', 
            NikDokter= '" . $_POST['namauser'] . "',
            Password= md5('" . $_POST['password'] . "'),
            where kodeuser = '" . $_POST['kodeuser'] . "' ";  
        }
    }else{    
        $query = "SELECT nama FROM petugas where nikpetugas = '" . $_POST['namauser'] . "'";
        $result = $mysqli->query($query); 
        $data = $result->fetch_array();
        $nama = $data['nama'];

        if($_POST['password'] == ''){
            $sql = "update user set 
            NamaUser = '" .  $nama . "', 
            NIKPetugas= '" . $_POST['namauser'] . "'
            where kodeuser = '" . $_POST['kodeuser'] . "' ";    
        
        }else{
            $sql = "update user set 
            NamaUser = '" .  $nama . "', 
            NIKPetugas= '" . $_POST['namauser'] . "',
            Password= md5('" . $_POST['password'] . "')
            where kodeuser = '" . $_POST['kodeuser'] . "' ";  
        }

    }
     if (!$mysqli -> query($sql)){
        $data = "Error description: " . $mysqli -> error;
    }else{
        $data = "success";
    } 
echo json_encode($data, JSON_PRETTY_PRINT);
?>