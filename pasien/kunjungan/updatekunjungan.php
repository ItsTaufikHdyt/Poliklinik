<?php
include("../../koneksi/config.php");
$tgl_kunjungan =$_GET['tgl_kunjungan'];
$no_pasien =$_POST['no_pasien'];
$kd_poli =$_POST['kd_poli'];
$jam_kunjungan =$_POST['jam_kunjungan'];
$update = "UPDATE kunjungan SET 
							 
							 no_pasien='$no_pasien',
							 kd_poli='$kd_poli',
							 jam_kunjungan='$jam_kunjungan'
							WHERE tgl_kunjungan='$tgl_kunjungan'";
							 
$hasil = mysqli_query($dbconnect, $update);
if ($hasil){
header("location:datakunjungan.php");
}
else{
echo"Edit Data Gagal";
}
?>