
<?php include('../../navbar.php'); ?>
 
 <?php
include("../../koneksi/config.php");
$kd_dokter=$_GET['kd_dokter'];
$edit= "SELECT * FROM dokter WHERE kd_dokter='$kd_dokter'";
$hasil=mysqli_query($dbconnect, $edit);
$data= mysqli_fetch_array($hasil);

echo"<div class=\"container\">
  <section class=\"col-lg-7\">
                
        <div class=\"table-responsive\">
      <div class=\"page-header\">
                <div class=\"panel panel-Primary\">
            <div class=\"panel-heading\">
                <b>Tindakan</b>
            </div>        
      <div class=\"panel-body\">
      <table class=\"table\">
<form method=\"POST\" action=\"updatedokter.php?kd_dokter=$kd_dokter\" class=\"form-horizontal\">
<div class=\"form-group\">
    <label>Kode Doktor</label>
    <input type=\"text\" name=\"kd_dokter\" class=\"form-control\" value=\"$data[kd_dokter]\">
   </div>
   <div class=\"form-group\">
    <label>Kode poli</label>
    <input type=\"text\" name=\"kd_poli\" class=\"form-control\" value=\"$data[kd_poli]\">
   </div>
   <div class=\"form-group\">
    <label>Tanggal Kunjungan</label>
    <input type=\"text\" name=\"tgl_kunjungan\" class=\"form-control\" value=\"$data[tgl_kunjungan]\">
   </div>
   <div class=\"form-group\">
    <label>Kode User</label>
    <input type=\"text\" name=\"kd_user\" class=\"form-control\" value=\"$data[kd_user]\">
   </div>
   <div class=\"form-group\">
    <label>Nama Dokter</label>
    <input type=\"text\" name=\"nm_dokter\" class=\"form-control\" value=\"$data[nm_dokter]\">
   </div>
   <div class=\"form-group\">
    <label>SIP</label>
    <input type=\"text\" name=\"sip\" class=\"form-control\" value=\"$data[sip]\">
   </div>
   <div class=\"form-group\">
    <label>Tempat Lahir</label>
    <input type=\"text\" name=\"tmpat_lahir\" class=\"form-control\" value=\"$data[tmpat_lahir]\">
   </div>
   <div class=\"form-group\">
    <label>No Telepon</label>
    <input type=\"text\" name=\"no_tlp\" class=\"form-control\" value=\"$data[no_tlp]\">
   </div>
   <div class=\"form-group\">
    <label>Alamat</label>
    <input type=\"text\" name=\"alamat\" class=\"form-control\" value=\"$data[alamat]\">
   </div>
   <div class=\"form-group\">
    <button type=\"submit\" class=\"btn btn-primary\" name=\"update\" value=\"update\">
    <span class=\"glyphicon glyphicon-floppy-open\"> Update</span>
    </button>
    </div>";
    ?>