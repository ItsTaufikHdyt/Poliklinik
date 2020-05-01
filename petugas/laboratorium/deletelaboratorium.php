<?php
    include "../../koneksi/config.php";
    $kd_lab = $_GET['kd_lab'];
    $query = $dbconnect->query("DELETE FROM laboratorium WHERE kd_lab='$kd_lab'");

        if($query){
                    header("location:datalaboratorium.php");
        }else{
                echo "Data Gagal Dihapus. <a href='datatindakan.php'>Kembali ke halaman sebelumnya</a>";
        }
?>