<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
 
 $sql = "select a.kodeobat KodeObat, c.namaobat NamaObat, HargaSatuan, a.jumlahobat JumlahObat, (a.JumlahObat * HargaSatuan) Subtotal  from assessment a left join rekammedis b on a.idrekammedis = b.idrekammedis 
 left join obat c on a.kodeobat = c.kodeobat left join signa d on c.idsigna = d.idsigna 
 where b.idkunjungan = '". $_GET['idkunjungan'] ."'";
 
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $json[] = $row;
}
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>