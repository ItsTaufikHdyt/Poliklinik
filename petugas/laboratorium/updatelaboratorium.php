<?php
include("../../koneksi/config.php");
$kd_lab =$_GET['kd_lab'];
$no_rm =$_POST['no_lab'];
$hasil_lab =$_POST['hasil_lab'];
$ket =$_POST['ket'];
$update = "UPDATE laboratorium SET 
							 
							 no_rm='$no_rm',
							 hasil_lab='$hasil_lab',
							 ket='$ket'
							WHERE kd_lab='$kd_lab'";
							 
$hasil = mysqli_query($dbconnect, $update);
if ($hasil){
header("location:datalaboratorium.php");
}
else{
echo"Edit Data Gagal";
}
?>