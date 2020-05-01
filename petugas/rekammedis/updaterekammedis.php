<?php
include("../../koneksi/config.php");
$no_rm =$_GET['no_rm'];
$kd_tindakan =$_POST['kd_tindakan'];
$kd_obat =$_POST['kd_obat'];
$kd_user =$_POST['kd_user'];
$no_pasien =$_POST['no_pasien'];
$diagnosa =$_POST['diagnosa'];
$resep=$_POST['resep'];
$keluhan =$_POST['keluhan'];
$tgl_pemeriksaan =$_POST['tgl_pemeriksaan'];
$ket =$_POST['ket'];
$update = "UPDATE rekammedis SET 
							 
							 kd_tindakan='$kd_tindakan',
							 kd_obat='$kd_obat',
							 kd_user='$kd_user',
							 no_pasien='$no_pasien',
							 diagnosa='$diagnosa',
							 resep='$resep',
							 keluhan='$keluhan',
							 tgl_pemeriksaan='$tgl_pemeriksaan',
							 ket='$ket'
							WHERE no_rm='$no_rm'";
							 
$hasil = mysqli_query($dbconnect, $update);
if ($hasil){
header("location:datarekammedis.php");
}
else{
echo"Edit Data Gagal";
}
?>