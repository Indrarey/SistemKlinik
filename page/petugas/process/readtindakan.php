<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';


$sql = "select 'Total Obat' Keterangan, (select  sum(a.JumlahObat * HargaSatuan)   from assessment a left join rekammedis b on a.idrekammedis = b.idrekammedis 
left join obat c on a.kodeobat = c.kodeobat left join signa d on c.idsigna = d.idsigna 
where b.idkunjungan = '". $_GET['idkunjungan'] ."')  Harga union all ";
 $sql .= "select Keterangan, Harga from tindakan where 1=1 union all ";
 $sql .= "select 'Total 'Keterangan, sum(Harga) Harga from tindakan where 1=1 union all ";
 $sql .= "select 'Grand Total' Keterangan, (select  sum(a.JumlahObat * HargaSatuan)   from assessment a left join rekammedis b on a.idrekammedis = b.idrekammedis 
left join obat c on a.kodeobat = c.kodeobat left join signa d on c.idsigna = d.idsigna 
where b.idkunjungan = '". $_GET['idkunjungan'] ."') + (select  sum(Harga) from tindakan where 1=1) Harga  union all ";
$sql .= "select 'Uang Pembayaran' Keterangan, UangPembayaran Harga from pembayaran where  idkunjungan = '". $_GET['idkunjungan'] ."' union all ";
$sql .= "select 'Uang Kembali' Keterangan, (UangPembayaran - TotalPembayaran) Harga from pembayaran where  idkunjungan = '". $_GET['idkunjungan'] ."' ";
// var_dump($sql);
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $json[] = $row;
}
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>