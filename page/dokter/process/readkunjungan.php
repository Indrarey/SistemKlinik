<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
 

$tgl = explode("/", $_GET['tglkunjungan']); 
$tglkunjungan =  $tgl[2] ."-".$tgl[1]."-".$tgl[0];
$sql = "SELECT a.NoAntrian, a.RmPasien, b.NamaLengkap, b.TglLahirPasien, b.JenisKelaminPasien, b.AlamatPasien, a.IdKunjungan FROM kunjungan a left join pasien b 
on a.rmpasien = b.rmpasien where a.TglKunjungan = '". $tglkunjungan ."'  and status = 'Periksa Dokter'
order by a.NoAntrian asc";
 
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $json[] = $row;
}
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>