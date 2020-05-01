<?php
include("../../koneksi/config.php");
$no_pasien =$_GET['no_pasien'];
$nm_pasien =$_POST['nm_pasien'];
$j_kel =$_POST['j_kel'];
$agama =$_POST['agama'];
$alamat =$_POST['alamat'];
$tgl_lhr =$_POST['tgl_lhr'];
$usia =$_POST['usia'];
$no_tlp =$_POST['no_tlp'];
$nm_kk =$_POST['nm_kk'];
$hub_kel =$_POST['hub_kel'];
$update = "UPDATE pasien SET 
							 
							 nm_pasien='$nm_pasien',
							 j_kel='$j_kel',
							 agama='$agama',
							 alamat='$alamat',
							 tgl_lhr='$tgl_lhr',
							 usia='$usia',
							 no_tlp='$no_tlp',
							 nm_kk='$nm_kk',
							 hub_kel='$hub_kel'
							WHERE no_pasien='$no_pasien'";
							 
$hasil = mysqli_query($dbconnect, $update);
if ($hasil){
header("location:datapasien.php");
}
else{
echo"Edit Data Gagal";
}
?>