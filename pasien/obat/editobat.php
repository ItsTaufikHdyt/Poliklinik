
<?php include('../../navbar2.php'); ?>
 
 <?php
include("../../koneksi/config.php");
$kd_obat=$_GET['kd_obat'];
$edit= "SELECT * FROM obat WHERE kd_obat='$kd_obat'";
$hasil=mysqli_query($dbconnect, $edit);
$data= mysqli_fetch_array($hasil);

echo"<div class=\"container\">
  <section class=\"col-lg-7\">
                
        <div class=\"table-responsive\">
      <div class=\"page-header\">
                <div class=\"panel panel-Primary\">
            <div class=\"panel-heading\">
                <b>obat</b>
            </div>        
      <div class=\"panel-body\">
      <table class=\"table\">
<form method=\"POST\" action=\"updateobat.php?kd_obat=$kd_obat\" class=\"form-horizontal\">
<div class=\"form-group\">
    <label>Kode obat</label>
    <input type=\"text\" name=\"kd_obat\" class=\"form-control\" value=\"$data[kd_obat]\">
   </div>
   <div class=\"form-group\">
    <label>Nama obat</label>
    <input type=\"text\" name=\"nm_obat\" class=\"form-control\" value=\"$data[nm_obat]\">
   </div>
   <div class=\"form-group\">
    <label>Jumlah Obat</label>
    <input type=\"text\" name=\"jml_obat\" class=\"form-control\" value=\"$data[jml_obat]\">
   </div>
   <div class=\"form-group\">
    <label>Ukuran</label>
    <input type=\"text\" name=\"ukuran\" class=\"form-control\" value=\"$data[ukuran]\">
   </div>
   <div class=\"form-group\">
    <label>Harga</label>
    <input type=\"text\" name=\"harga\" class=\"form-control\" value=\"$data[harga]\">
   </div>
   <div class=\"form-group\">
    <button type=\"submit\" class=\"btn btn-primary\" name=\"update\" value=\"update\">
    <span class=\"glyphicon glyphicon-floppy-open\"> Update</span>
    </button>
    </div>";
    ?>