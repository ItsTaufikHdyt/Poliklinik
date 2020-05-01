<?php
include("../../koneksi/config.php");
$kd_poli =$_GET['kd_poli'];
$nm_poli =$_POST['nm_poli'];
$lantai =$_POST['lantai'];
$update = "UPDATE poliklinik SET 
							 
							 nm_poli='$nm_poli',
							 lantai='$lantai'
							WHERE kd_poli='$kd_poli'";
							 
$hasil = mysqli_query($dbconnect, $update);
if ($hasil){
header("location:datapoliklinik.php");
}
else{
echo"Edit Data Gagal";
}
?>