<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
if($_GET['idsigna'] == '')
{
    $sql = "SELECT * FROM signa Order By keterangan asc";
}else{
    $sql = "SELECT * FROM signa where idsigna = '". $_GET['idsigna'] ."'";
} 
$result = $mysqli->query($sql);
$num = mysqli_num_rows($result);
if($num == 0){
    $json[] = '';

}else{
    while ($row = $result->fetch_assoc()) {
        $json[] = $row;
    }
}
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>