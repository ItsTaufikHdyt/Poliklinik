
<?php include('../../navbar2.php'); ?>
 
 <?php
include("../../koneksi/config.php");
$tgl_kunjungan=$_GET['tgl_kunjungan'];
$edit= "SELECT * FROM kunjungan WHERE tgl_kunjungan='$tgl_kunjungan'";
$hasil=mysqli_query($dbconnect, $edit);
$data= mysqli_fetch_array($hasil);

echo"<div class=\"container\">
  <section class=\"col-lg-7\">
                
        <div class=\"table-responsive\">
      <div class=\"page-header\">
                <div class=\"panel panel-Primary\">
            <div class=\"panel-heading\">
                <b>Kunjungan</b>
            </div>        
      <div class=\"panel-body\">
      <table class=\"table\">
<form method=\"POST\" action=\"updatekunjungan.php?tgl_kunjungan=$tgl_kunjungan\" class=\"form-horizontal\">
<div class=\"form-group\">
    <label>Tanggal Kunjungan</label>
    <input type=\"text\" name=\"tgl_kunjungan\" class=\"form-control\" value=\"$data[tgl_kunjungan]\">
   </div>
   <div class=\"form-group\">
    <label>No Pasien</label>
    <input type=\"text\" name=\"no_pasien\" class=\"form-control\" value=\"$data[no_pasien]\">
   </div>
   <div class=\"form-group\">
    <label>Kode Poli</label>
    <input type=\"text\" name=\"kd_poli\" class=\"form-control\" value=\"$data[kd_poli]\">
   </div>
   <div class=\"form-group\">
    <label>Jam Kunjungan</label>
    <input type=\"text\" name=\"jam_kunjungan\" class=\"form-control\" value=\"$data[jam_kunjungan]\">
   </div>
   <div class=\"form-group\">
    <button type=\"submit\" class=\"btn btn-primary\" name=\"update\" value=\"update\">
    <span class=\"glyphicon glyphicon-floppy-open\"> Update</span>
    </button>
    </div>";
    ?>