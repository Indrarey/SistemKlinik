<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
if($_GET['kodeuser'] == '')
{
    $sql = "SELECT *, case when nikdokter = '' then 'Petugas' else 'Dokter' end Jabatan, case when nikdokter = '' then kodepetugas else nikdokter end NoIdentitas FROM user Order By kodeuser asc";
}else{
    $sql = "SELECT *, case when nikdokter = '' then 'Petugas' else 'Dokter' end Jabatan, case when nikdokter = '' then kodepetugas else nikdokter end NoIdentitas  FROM user where kodeuser = '". $_GET['kodeuser'] ."'";
} 
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $json[] = $row;
}
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>