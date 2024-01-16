<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
 
$sql = "SELECT a.*, Status FROM kunjungan a left join pasien b 
on a.rmpasien = b.rmpasien where a.rmpasien = '". $_GET['rmpasien'] ."' 
order by tglkunjungan desc";
 
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $json[] = $row;
}
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>