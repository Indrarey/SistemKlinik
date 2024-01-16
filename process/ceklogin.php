<?php
session_start();
header("Content-type:application/json");
require '../config/koneksi.php';


$sql = "SELECT * FROM user where kodeuser = '". $_POST['username'] ."'";
$result = $mysqli->query($sql);
// var_dump($_POST['username']);
if($result->num_rows < 1){
    $data = "Username tidak ditemukan";
}else{
        
    $sql = "SELECT *, case when nikdokter = '' then 'Petugas' else 'Dokter' end Jabatan FROM user where kodeuser = '". $_POST['username'] ."' and password = '". md5($_POST['password']) ."'";
    $result = $mysqli->query($sql);
    if($result->num_rows < 1){
        $data = "Password salah";
    }else{
        $row = $result->fetch_array(); 
        // var_dump($row[]);
        $_SESSION['userkode'] = $row['KodeUser'];
        $_SESSION['jabatan'] = $row['Jabatan'];
        $data = 'success';

    }
}

echo json_encode($data, JSON_PRETTY_PRINT);
?>