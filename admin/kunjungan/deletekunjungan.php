<?php
    include "../../koneksi/config.php";
    $tgl_kunjungan = $_GET['tgl_kunjungan'];
    $query = $dbconnect->query("DELETE FROM kunjungan WHERE tgl_kunjungan='$tgl_kunjungan'");

        if($query){
                    header("location:datakunjungan.php");
        }else{
                echo "Data Gagal Dihapus. <a href='datakunjungan.php'>Kembali ke halaman sebelumnya</a>";
        }
?>