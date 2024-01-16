<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
 
$sql = "SELECT * FROM rekammedis where idkunjungan = '" . $_POST['idkunjungan']  . "' and rmpasien = '". $_POST['rmpasien'] ."' ";

$result = $mysqli->query($sql); 

if ($result->num_rows > 0) { 
    $data = "Rekam Medis sudah ada";
}else{
    
    // $sql1 = "UPDATE kunjungan set status = 'Pembayaran' where rmpasien = '" . $_POST['rmpasien'] . "' and idkunjungan = '" . $_POST['idkunjungan'] . "'";
    // $mysqli -> query($sql1);

    $sql = "INSERT INTO rekammedis (RmPasien,IdKunjungan,Diagnosa,TekananDarah,Berat) VALUES ('" . $_POST['rmpasien'] . "','" . $_POST['idkunjungan'] . "','" . $_POST['diagnosa'] . "','" . $_POST['tekanandarah'] . "','" . $_POST['berat'] . "')";
    
    if (!$mysqli -> query($sql)){
        $data = "Error description: " . $mysqli -> error;
    }else{
        $data = "success";
    }
}
echo json_encode($data, JSON_PRETTY_PRINT);
?>