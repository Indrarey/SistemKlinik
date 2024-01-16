<?php
header("Content-type:application/json");
require '../../../config/koneksi.php';

$sql = "SELECT * FROM supplier where kodesupplier = '" . $_POST['kodesupplier'] . "'";
$num = mysqli_num_rows($mysqli -> query($sql));
if($num > 0){
    $data = "Kode Supplier Sudah terdaftar";
}else{
    $sql = "INSERT INTO supplier (kodesupplier,namasupplier) VALUES ('" . $_POST['kodesupplier'] . 
    "','" . $_POST['namasupplier'] . "')";
    // $result = $mysqli->query($sql);
    if (!$mysqli -> query($sql)){
        $data = "Error description: " . $mysqli -> error;
    }else{
        $data = "success";
    }
}
echo json_encode($data, JSON_PRETTY_PRINT);
?>