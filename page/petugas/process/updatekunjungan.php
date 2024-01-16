<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
$tgl = explode("/", $_POST['tglkunjungan']); 
$tglkunjungan =  $tgl[2] ."-".$tgl[1]."-".$tgl[0];
$sql = "SELECT * FROM kunjungan where tglkunjungan = '" . $tglkunjungan . "' and 
rmpasien = '". $_POST['rmpasien'] ."' and idkunjungan != '". $_POST['idkunjungan'] . "'";

$result = $mysqli->query($sql); 

if ($result->num_rows > 0) { 
    $data = "Tgl Kunjungan sudah terdaftar";
}else{
    
    $sql = "update kunjungan set TglKunjungan = '" . $tglkunjungan . "', 
    NoAntrian = '" . $_POST['noantrian'] . "', Penjamin = '" . $_POST['penjamin'] . "' WHERE IDKUNJUNGAN = '". $_POST['idkunjungan'] ."'";
    
    if (!$mysqli -> query($sql)){
        $data = "Error description: " . $mysqli -> error;
    }else{
        $data = "success";
    }
}
echo json_encode($data, JSON_PRETTY_PRINT);
?>