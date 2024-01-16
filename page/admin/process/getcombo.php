<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';

if($_GET['type'] == '1')
{
   $sql = "SELECT * FROM supplier Order By namasupplier asc";
    $result = $mysqli->query($sql);
    $num = mysqli_num_rows($result);
    // var_dump(); 
    if($num == 0){
        $json[] = '';
    }else{
        while ($row = $result->fetch_assoc()) {
                $json[] = $row;
        }                                                                                                                                                                                                                                                                                                                                                                                                                               
    }
}
else if($_GET['type'] == '2')
{
   $sql = "SELECT * FROM signa Order By keterangan asc";
    $result = $mysqli->query($sql);
    $num = mysqli_num_rows($result);
    if($num == 0){
        $json[] = '';
    }else{
        while ($row = $result->fetch_assoc()) {
                $json[] = $row;
        }                                                                                                                                                                                                                                                                                                                                                                                                                               
    }
}
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>