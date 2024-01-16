<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
 
 
$sql = "SELECT a.NoAntrian, a.TglKunjungan, b.Diagnosa, b.TekananDarah, b.Berat, b.idrekammedis IdRekamMedis, COALESCE(JumlahObat,0) JumlahObat,  a.IdKunjungan 
FROM kunjungan a inner join rekammedis b 
on a.rmpasien = b.rmpasien left join (select count(coalesce(kodeobat,0)) JumlahObat, idrekammedis from assessment group by idrekammedis) c on b.idrekammedis = c.idrekammedis where a.rmpasien = '". $_GET['rmpasien'] ."' 
order by a.TglKunjungan desc";
 
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $json[] = $row;
}
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>