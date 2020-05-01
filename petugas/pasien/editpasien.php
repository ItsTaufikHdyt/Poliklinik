
<?php include('../../navba1r.php'); ?>
 
 <?php
include("../../koneksi/config.php");
$no_pasien=$_GET['no_pasien'];
$edit= "SELECT * FROM pasien WHERE no_pasien='$no_pasien'";
$hasil=mysqli_query($dbconnect, $edit);
$data= mysqli_fetch_array($hasil);

echo"<div class=\"container\">
  <section class=\"col-lg-7\">
                
        <div class=\"table-responsive\">
      <div class=\"page-header\">
                <div class=\"panel panel-Primary\">
            <div class=\"panel-heading\">
                <b>pasien</b>
            </div>        
      <div class=\"panel-body\">
      <table class=\"table\">
<form method=\"POST\" action=\"updatepasien.php?no_pasien=$no_pasien\" class=\"form-horizontal\">
<div class=\"form-group\">
    <label>No pasien</label>
    <input type=\"text\" name=\"no_pasien\" class=\"form-control\" value=\"$data[no_pasien]\">
   </div>
   <div class=\"form-group\">
    <label>Nama pasien</label>
    <input type=\"text\" name=\"nm_pasien\" class=\"form-control\" value=\"$data[nm_pasien]\">
   </div>
   <div class=\"form-group\">
    <label>Jenis Kelamin</label>
    <input type=\"text\" name=\"j_kel\" class=\"form-control\" value=\"$data[j_kel]\">
   </div>
   <div class=\"form-group\">
    <label>agama</label>
    <input type=\"text\" name=\"agama\" class=\"form-control\" value=\"$data[agama]\">
   </div>
   <div class=\"form-group\">
    <label>Alamat</label>
    <input type=\"text\" name=\"alamat\" class=\"form-control\" value=\"$data[alamat]\">
   </div>
   <div class=\"form-group\">
    <label>Tanggal Lahir</label>
    <input type=\"text\" name=\"tgl_lhr\" class=\"form-control\" value=\"$data[tgl_lhr]\">
   </div>
   <div class=\"form-group\">
    <label>Usia</label>
    <input type=\"text\" name=\"usia\" class=\"form-control\" value=\"$data[usia]\">
   </div>
   <div class=\"form-group\">
    <label>No Telepon</label>
    <input type=\"text\" name=\"no_tlp\" class=\"form-control\" value=\"$data[no_tlp]\">
   </div>
   <div class=\"form-group\">
    <label>No KK</label>
    <input type=\"text\" name=\"nm_kk\" class=\"form-control\" value=\"$data[nm_kk]\">
   </div>
   <div class=\"form-group\">
    <label>Hubungan Keluarga</label>
    <input type=\"text\" name=\"hub_kel\" class=\"form-control\" value=\"$data[hub_kel]\">
   </div>
   <div class=\"form-group\">
    <button type=\"submit\" class=\"btn btn-primary\" name=\"update\" value=\"update\">
    <span class=\"glyphicon glyphicon-floppy-open\"> Update</span>
    </button>
    </div>";
    ?>