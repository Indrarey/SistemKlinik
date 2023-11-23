<?php
$page = $_GET['page'];
switch($page){
    case "dokter":
        include "page/admin/dokter.php";
    break;
    case "pasien":
        include "page/admin/pasien.php";
    break;
    case "obat":
        include "page/admin/    obat.php";
    break;
    case "petugas":
        include "page/admin/petugas.php";
    break;
    case "pendaftaran":
        include "page/petugas/pendaftaran.php";
    break;
    default:
        include "php";
    break;
}
?>