<?php
    include "../../koneksi/config.php";
    $kd_dokter = $_GET['kd_dokter'];
    $query = $dbconnect->query("DELETE FROM dokter WHERE kd_dokter='$kd_dokter'");

        if($query){
                    header("location:datadokter.php");
        }else{
                echo "Data Gagal Dihapus. <a href='datadokter.php'>Kembali ke halaman sebelumnya</a>";
        }
?>