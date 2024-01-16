<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
if($_GET['kodeobat'] == '')
{
    $sql = "SELECT *, Keterangan Signa, NamaSupplier Supplier FROM obat a inner join signa b on a.idsigna = b.idsigna inner join supplier c 
    on a.kodesupplier = c.kodesupplier Order By kodeobat asc";
}else{
    $sql = "SELECT *, Keterangan Signa, NamaSupplier Supplier FROM obat a inner join signa b on a.idsigna = b.idsigna inner join supplier c 
    on a.kodesupplier = c.kodesupplier where kodeobat = '". $_GET['kodeobat'] ."'"; 
}
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $json[] = $row;
}
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>