<?php
    include "../../koneksi/config.php";
    $no_pasien = $_GET['no_pasien'];
    $query = $dbconnect->query("DELETE FROM pasien WHERE no_pasien='$no_pasien'");

        if($query){
                    header("location:datapasien.php");
        }else{
                echo "Data Gagal Dihapus. <a href='datatindakan.php'>Kembali ke halaman sebelumnya</a>";
        }
?>