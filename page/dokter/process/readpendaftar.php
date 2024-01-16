<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
 
$sql = "SELECT  (select coalesce(count(*),0) from pembayaran where idkunjungan = b.idkunjungan ) StatusBayar,  a.RmPasien, a.NamaLengkap, a.AlamatPasien, a.TglLahirPasien, a.NoHP,
    b.TglKunjungan, (select coalesce(count(*),0) from rekammedis where idkunjungan = b.idkunjungan and rmpasien = a.rmpasien ) JumlahRekam  FROM pasien a left join kunjungan b on a.rmpasien = b.rmpasien 
 
    where idkunjungan = '". $_GET['idkunjungan'] ."' ";

$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $json[] = $row;
}
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>