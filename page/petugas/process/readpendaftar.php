<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
if($_GET['cekpasien'] == '')
{
    $sql = "SELECT * FROM pasien Order By tgldaftar desc";
}else{
    $sql = "SELECT * FROM pasien where namalengkap like '%". $_GET['cekpasien'] ."%' or noidentitas  like '%". $_GET['cekpasien'] ."%' or tgllahirpasien like '%". $_GET['cekpasien'] ."%' or rmpasien like '%". $_GET['cekpasien'] ."%' or norekammedis like '%". $_GET['cekpasien'] ."%' ";
} 
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $json[] = $row;
}
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>