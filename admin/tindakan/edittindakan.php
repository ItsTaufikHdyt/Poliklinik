
<?php include('../../navbar.php'); ?>
 
 <?php
include("../../koneksi/config.php");
$kd_tindakan=$_GET['kd_tindakan'];
$edit= "SELECT * FROM tindakan WHERE kd_tindakan='$kd_tindakan'";
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
<form method=\"POST\" action=\"updatetindakan.php?kd_tindakan=$kd_tindakan\" class=\"form-horizontal\">
<div class=\"form-group\">
    <label>Kode Tindakan</label>
    <input type=\"text\" name=\"kd_tindakan\" class=\"form-control\" value=\"$data[kd_tindakan]\">
   </div>
   <div class=\"form-group\">
    <label>Nama Tindakan</label>
    <input type=\"text\" name=\"nm_tindakan\" class=\"form-control\" value=\"$data[nm_tindakan]\">
   </div>
   <div class=\"form-group\">
    <label>Ket</label>
    <input type=\"text\" name=\"ket\" class=\"form-control\" value=\"$data[ket]\">
   </div>
   <div class=\"form-group\">
    <button type=\"submit\" class=\"btn btn-primary\" name=\"update\" value=\"update\">
    <span class=\"glyphicon glyphicon-floppy-open\"> Update</span>
    </button>
    </div>";
    ?>