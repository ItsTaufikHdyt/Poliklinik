<?php
    include "../../koneksi/config.php";
    $kd_tindakan = $_GET['kd_tindakan'];
    $query = $dbconnect->query("DELETE FROM tindakan WHERE kd_tindakan='$kd_tindakan'");

        if($query){
                    header("location:datatindakan.php");
        }else{
                echo "Data Gagal Dihapus. <a href='datatindakan.php'>Kembali ke halaman sebelumnya</a>";
        }
?>