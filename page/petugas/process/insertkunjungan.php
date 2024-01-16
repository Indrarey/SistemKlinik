<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
$tgl = explode("/", $_POST['tglkunjungan']); 
$tglkunjungan =  $tgl[2] ."-".$tgl[1]."-".$tgl[0];
$sql = "SELECT * FROM kunjungan where tglkunjungan = '" . $tglkunjungan . "' and rmpasien = '". $_POST['rmpasien'] ."' ";

$result = $mysqli->query($sql); 

$sql2 = "SELECT * FROM kunjungan where tglkunjungan = '" . $tglkunjungan . "' and rmpasien <> '". $_POST['rmpasien'] ."' and noantrian = '". $_POST['noantrian'] ."' ";
 
$result2= $mysqli->query($sql2); 

if ($result->num_rows > 0) { 
    $data = "Tgl Kunjungan sudah diinput";
}else if ($result2->num_rows > 0) { 
    $data = "No Antrian di tanggal yang sama sudah terdaftar";
}else{ 
    $sql = "INSERT INTO kunjungan (RmPasien,TglKunjungan,NoAntrian,Penjamin,Status) VALUES ('" . $_POST['rmpasien'] . "','" . $tglkunjungan . "','" . $_POST['noantrian'] . "','" . $_POST['penjamin'] . "', 'Periksa Dokter')";
    
    if (!$mysqli -> query($sql)){
        $data = "Error description: " . $mysqli -> error;
    }else{
        $data = "success";
    }
}

echo json_encode($data, JSON_PRETTY_PRINT);
?>