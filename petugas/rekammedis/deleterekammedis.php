<?php
    include "../../koneksi/config.php";
    $no_rm = $_GET['no_rm'];
    $query = $dbconnect->query("DELETE FROM rekammedis WHERE no_rm='$no_rm'");

        if($query){
                    header("location:datarekammedis.php");
        }else{
                echo "Data Gagal Dihapus. <a href='datatindakan.php'>Kembali ke halaman sebelumnya</a>";
        }
?>