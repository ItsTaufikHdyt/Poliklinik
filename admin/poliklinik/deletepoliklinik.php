<?php
    include "../../koneksi/config.php";
    $kd_poli = $_GET['kd_poli'];
    $query = $dbconnect->query("DELETE FROM poliklinik WHERE kd_poli='$kd_poli'");

        if($query){
                    header("location:datapoliklinik.php");
        }else{
                echo "Data Gagal Dihapus. <a href='datapoliklinik.php'>Kembali ke halaman sebelumnya</a>";
        }
?>