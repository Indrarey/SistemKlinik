<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
 

$tgl = explode("/", $_GET['tglkunjungan']); 
$tglkunjungan =  $tgl[2] ."-".$tgl[1]."-".$tgl[0];
$sql = "SELECT  case when (select coalesce(count(*), 0) from pembayaran where idkunjungan = a.IdKunjungan) > 0 then 'Lunas' else  'Belum Lunas' end Status , a.NoAntrian, a.RmPasien, b.NamaLengkap, b.TglLahirPasien, b.JenisKelaminPasien, b.AlamatPasien, a.IdKunjungan, JumlahObat FROM kunjungan a left join pasien b 
on a.rmpasien = b.rmpasien left join rekammedis c on a.idkunjungan = c.idkunjungan left join  (select count(*) JumlahObat, idrekammedis from assessment group by idrekammedis) d on c.idrekammedis = d.idrekammedis
 where a.status in ('Pembayaran','Lunas') and a.TglKunjungan = '". $tglkunjungan ."' 
order by a.NoAntrian asc";
 
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $json[] = $row;
}
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>