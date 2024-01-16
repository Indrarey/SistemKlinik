<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';
if($_GET['kodesupplier'] == '')
{
    $sql = "SELECT * FROM supplier Order By namasupplier asc";
}else{
    $sql = "SELECT * FROM supplier where kodesupplier = '". $_GET['kodesupplier'] ."'";
} 
$result = $mysqli->query($sql);
// $num = mysqli_num_rows($result);
// if($num == 0){
//     $json[] = '';

// }else{

    while ($row = $result->fetch_assoc()) {
            $json[] = $row;
    }                                                                                                                                                                                                                                                                                                                                                                                                                               
// }
$data['data'] = $json;
echo json_encode($data, JSON_PRETTY_PRINT);
?>