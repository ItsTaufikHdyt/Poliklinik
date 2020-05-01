<?php
include("../../koneksi/config.php");
$kd_obat =$_GET['kd_obat'];
$nm_obat =$_POST['nm_obat'];
$jml_obat =$_POST['jml_obat'];
$ukuran =$_POST['ukuran'];
$harga =$_POST['harga'];
$update = "UPDATE obat SET 
							 
							 nm_obat='$nm_obat',
							 jml_obat='$jml_obat',
							 ukuran='$ukuran',
							 harga='$harga'
							WHERE kd_obat='$kd_obat'";
							 
$hasil = mysqli_query($dbconnect, $update);
if ($hasil){
header("location:dataobat.php");
}
else{
echo"Edit Data Gagal";
}
?>