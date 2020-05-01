<?php
    include "../../koneksi/config.php";
    $kd_obat = $_GET['kd_obat'];
    $query = $dbconnect->query("DELETE FROM obat WHERE kd_obat='$kd_obat'");

        if($query){
                    header("location:dataobat.php");
        }else{
                echo "Data Gagal Dihapus. <a href='dataobat.php'>Kembali ke halaman sebelumnya</a>";
        }
?>