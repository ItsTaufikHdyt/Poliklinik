<?php
include("../../koneksi/config.php");
$kd_dokter =$_GET['kd_dokter'];
$kd_poli =$_POST['kd_poli'];
$tgl_kunjungan =$_POST['tgl_kunjungan'];
$kd_user =$_POST['kd_user'];
$nm_dokter =$_POST['nm_dokter'];
$sip =$_POST['sip'];
$tmpat_lahir =$_POST['tmpat_lahir'];
$no_tlp =$_POST['no_tlp'];
$alamat =$_POST['alamat'];
$update = "UPDATE dokter SET 
							 
							 kd_poli='$kd_poli',
							 tgl_kunjungan='$tgl_kunjungan',
							 kd_user='$kd_user',
							 nm_dokter='$nm_dokter',
							 sip='$sip',
							 tmpat_lahir='$tmpat_lahir',
							 no_tlp='$no_tlp',
							 alamat='$alamat'
							WHERE kd_dokter='$kd_dokter'";
							 
$hasil = mysqli_query($dbconnect, $update);
if ($hasil){
header("location:datadokter.php");
}
else{
echo"Edit Data Gagal";
}
?>