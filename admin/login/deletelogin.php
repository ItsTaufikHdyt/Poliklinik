<?php
    include "../../koneksi/config.php";
    $username = $_GET['username'];
    $query = $dbconnect->query("DELETE FROM login WHERE username='$username'");

        if($query){
                    header("location:datalogin.php");
        }else{
                echo "Data Gagal Dihapus. <a href='datausername.php'>Kembali ke halaman sebelumnya</a>";
        }
?>