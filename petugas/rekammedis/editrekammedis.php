
<?php include('../../navbar1.php'); ?>
 
 <?php
include("../../koneksi/config.php");
$no_rm=$_GET['no_rm'];
$edit= "SELECT * FROM rekammedis WHERE no_rm='$no_rm'";
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
<form method=\"POST\" action=\"updaterekammedis.php?no_rm=$no_rm\" class=\"form-horizontal\">
<div class=\"form-group\">
    <label>No Rekam Medis</label>
    <input type=\"text\" name=\"no_rm\" class=\"form-control\" value=\"$data[no_rm]\">
   </div>
   <div class=\"form-group\">
    <label>Kode Tindakan</label>
    <input type=\"text\" name=\"kd_tindakan\" class=\"form-control\" value=\"$data[kd_tindakan]\">
   </div>
   <div class=\"form-group\">
    <label>Kode Obat</label>
    <input type=\"text\" name=\"kd_obat\" class=\"form-control\" value=\"$data[kd_obat]\">
   </div>
   <div class=\"form-group\">
    <label>Kode User</label>
    <input type=\"text\" name=\"kd_user\" class=\"form-control\" value=\"$data[kd_user]\">
   </div>
   <div class=\"form-group\">
    <label>No Pasien</label>
    <input type=\"text\" name=\"no_pasien\" class=\"form-control\" value=\"$data[no_pasien]\">
   </div>
   <div class=\"form-group\">
    <label>Diagnosa</label>
    <input type=\"text\" name=\"diagnosa\" class=\"form-control\" value=\"$data[diagnosa]\">
   </div>
   <div class=\"form-group\">
    <label>Resep</label>
    <input type=\"text\" name=\"resep\" class=\"form-control\" value=\"$data[resep]\">
   </div>
   <div class=\"form-group\">
    <label>Keluhan</label>
    <input type=\"text\" name=\"keluhan\" class=\"form-control\" value=\"$data[keluhan]\">
   </div>
   <div class=\"form-group\">
    <label>Tanggal Pemeriksaan</label>
    <input type=\"text\" name=\"tgl_pemeriksaan\" class=\"form-control\" value=\"$data[tgl_pemeriksaan]\">
   </div>
   <div class=\"form-group\">
    <label>Keteangan</label>
    <input type=\"text\" name=\"ket\" class=\"form-control\" value=\"$data[ket]\">
   </div>
   <div class=\"form-group\">
    <button type=\"submit\" class=\"btn btn-primary\" name=\"update\" value=\"update\">
    <span class=\"glyphicon glyphicon-floppy-open\"> Update</span>
    </button>
    </div>";
    ?>