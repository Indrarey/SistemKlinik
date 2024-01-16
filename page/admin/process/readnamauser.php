<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';


if($_GET['kodeuser'] == ''){
        $sql = "SELECT NIKDokter KodeUser, Nama NamaUser, 'Dokter' Jabatan FROM Dokter 
         UNION ALL 
        SELECT NIKPetugas KodeUser, Nama NamaUser, 'Petugas' Jabatan FROM petugas
        ";
}else{
    $sql = "
    select*from (
    SELECT NIKDokter KodeUser, Nama NamaUser, 'Dokter' Jabatan FROM Dokter 
    UNION ALL 
   SELECT NIKPetugas KodeUser, Nama NamaUser, 'Petugas' Jabatan FROM petugas 
    ) as qry where KodeUser = '". $_GET['kodeuser'] ."'";
}

$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $json[] = $row;
}
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>