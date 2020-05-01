<?php
include("../../koneksi/config.php");
$kd_tindakan =$_GET['kd_tindakan'];
$nm_tindakan =$_POST['nm_tindakan'];
$ket =$_POST['ket'];
$update = "UPDATE tindakan SET 
							 
							 nm_tindakan='$nm_tindakan',
							 ket='$ket'
							WHERE kd_tindakan='$kd_tindakan'";
							 
$hasil = mysqli_query($dbconnect, $update);
if ($hasil){
header("location:datatindakan.php");
}
else{
echo"Edit Data Gagal";
}
?>