<?php
  session_start(); 
   
    require '../../config/koneksi.php';
    

    $sql = "select * from kunjungan a left join pasien b on a.rmpasien = b.rmpasien 
    where idkunjungan = '". $_GET['idkunjungan'] ."'";
    $result = $mysqli->query($sql); 
    
    $data = $result->fetch_array();

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pembayaran</title>
</head>

<style>
@media print {
  @page {
    size: A4;
    margin: 30;
  }

  .table-isi{
    margin-left:40; 
  }

  body {
    margin: 1.5cm; /* Adjust margin as needed */
  }

  /* Sembunyikan elemen header saat mencetak */
  header {
    display: none;
  }
}
</style>
<body> 
    
    <table width="100%">
        <tr>
            <td align="center"><h2>KLINIK TERPADU</h2>
                <h3>Jl. Tangerang</h3>
                <p>Telp : 089 - </p>
            </td>
        </tr>
    </table>
    <hr>
    <table width="100%" class="table-isi">
         <tr>
            <td align="center" colspan="3">
                <h4><u>BUKTI PEMBAYARAN</u></h4>
            </td>
        </tr>
    
        <tr>
            <td width="40%">
                Nama Pasien
            </td>
            <td width="10%">
                :
            </td>
            <td width="50%">
                <?= $data['NamaLengkap'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Jenis Kelamin
            </td>
            <td>
                :
            </td>
            <td>
                <?= $data['JenisKelaminPasien'] ?>
                
            </td>
        </tr>
        <tr>
            <td>
                Alamat
            </td>
            <td>
                :
            </td>
            <td>
                <?= $data['AlamatPasien'] ?>
            </td>
        </tr>
       <tr>
            <td>
                Untuk Pembayaran
            </td>
            <td>
                
            </td>
            <td>
                
            </td>
        </tr>
    </table>
    <table style="margin-left:30px">

    <?php

        $sql = "select CONCAT(c.namaobat, ' x ', convert(a.jumlahobat, char)) Keterangan, (a.JumlahObat * HargaSatuan) Harga  from assessment a left join rekammedis b on a.idrekammedis = b.idrekammedis 
        left join obat c on a.kodeobat = c.kodeobat left join signa d on c.idsigna = d.idsigna 
        where b.idkunjungan = '". $_GET['idkunjungan'] ."' union all ";
        $sql .= "select 'Total Obat' Keterangan, (select  sum(a.JumlahObat * HargaSatuan)   from assessment a left join rekammedis b on a.idrekammedis = b.idrekammedis 
        left join obat c on a.kodeobat = c.kodeobat left join signa d on c.idsigna = d.idsigna 
        where b.idkunjungan = '". $_GET['idkunjungan'] ."')  Harga union all ";
        $sql .= "select Keterangan, Harga from tindakan where 1=1 union all ";
        $sql .= "select 'Total'Keterangan, sum(Harga) Harga from tindakan where 1=1 union all ";
        $sql .= "select 'Grand Total' Keterangan, (select  sum(a.JumlahObat * HargaSatuan)   from assessment a left join rekammedis b on a.idrekammedis = b.idrekammedis 
        left join obat c on a.kodeobat = c.kodeobat left join signa d on c.idsigna = d.idsigna 
        where b.idkunjungan = '". $_GET['idkunjungan'] ."') + (select  sum(Harga) from tindakan where 1=1) Harga  union all ";
        $sql .= "select 'Uang Pembayaran' Keterangan, UangPembayaran Harga from pembayaran where  idkunjungan = '". $_GET['idkunjungan'] ."' union all ";
        $sql .= "select 'Uang Kembali' Keterangan, (UangPembayaran - TotalPembayaran) Harga from pembayaran where  idkunjungan = '". $_GET['idkunjungan'] ."' ";
        $result = $mysqli->query($sql); 
            while ($row = $result->fetch_assoc()) {
        
            if($row['Keterangan'] == 'Total' || $row['Keterangan'] == 'Grand Total'){    
        ?>
        
        <tr>
            <td>
                <b>
                    <?= $row['Keterangan'] ?>
                </b>
            </td>
            <td>
                <b>
                :
                </b>
            </td>
            <td>
                <b>
                    <?= "Rp " . number_format($row['Harga'], 0, ',', '.') ?>
                </b>
            </td>
        </tr>

        <?php
            }else{
        ?>

        <tr>
            <td>
                <?= $row['Keterangan'] ?>
            </td>
            <td>
                :
            </td>
            <td>
                <?= "Rp " . number_format($row['Harga'], 0, ',', '.') ?>
            </td>
        </tr>

        <?php
            }
        ?>
        <?php
            }
        ?>

    </table>

    <br>
    <br>
    <table>
        
        <tr>
            <td>
                Cara Pembayaran
            </td>
            <td> 
            </td>
            <td>
                
            </td>
        </tr>
       
        <tr>
            <td>
                 &nbsp;
            </td>
            <td> 
            </td>
            <td>
                
            </td>
        </tr>
        <tr>
            <td>
                Cash
            </td>
            <td>
                
            </td>
            <td>
                
            </td>
        </tr>
    </table>
    <table width="100%">
        
        <tr>
            <td align ="right"><i>
                <?= date('d F Y H:i:s') ?>
            </i></td>
        </tr>
       
    </table>
</body>
    <script>
        window.print();
    </script>
</html>

