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
        include "page/admin/obat.php";
    break;
    case "petugas":
        include "page/admin/petugas.php";
    break; 
    case "supplier":
        include "page/admin/supplier.php";
    break;
    case "signa":
        include "page/admin/signa.php";
    break;    
    case "tindakan":
        include "page/admin/tindakan.php";
    break;    
    case "user":
        include "page/admin/user.php";
    break;
    case "pendaftaran":
        include "page/petugas/pendaftaran.php";
    break;      
    case "kunjunganpasien":
        include "page/dokter/kunjunganpasien.php";
    break;  
    case "pembayaran":
        include "page/petugas/pembayaran.php";
    break;   
    default:
        include "dashboard.php";
    break;
}
?>