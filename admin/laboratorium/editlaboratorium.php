
<?php include('../../navbar.php'); ?>
 
 <?php
include("../../koneksi/config.php");
$kd_lab=$_GET['kd_lab'];
$edit= "SELECT * FROM laboratorium WHERE kd_lab='$kd_lab'";
$hasil=mysqli_query($dbconnect, $edit);
$data= mysqli_fetch_array($hasil);

echo"<div class=\"container\">
  <section class=\"col-lg-7\">
                
        <div class=\"table-responsive\">
      <div class=\"page-header\">
                <div class=\"panel panel-Primary\">
            <div class=\"panel-heading\">
                <b>laboratorium</b>
            </div>        
      <div class=\"panel-body\">
      <table class=\"table\">
<form method=\"POST\" action=\"updatelaboratorium.php?kd_lab=$kd_lab\" class=\"form-horizontal\">
<div class=\"form-group\">
    <label>Kode laboratorium</label>
    <input type=\"text\" name=\"kd_lab\" class=\"form-control\" value=\"$data[kd_lab]\">
   </div>
   <div class=\"form-group\">
    <label>No RM</label>
    <input type=\"text\" name=\"no_rm\" class=\"form-control\" value=\"$data[no_rm]\">
   </div>
   <div class=\"form-group\">
    <label>Hasil Lab</label>
    <input type=\"text\" name=\"hasil_lab\" class=\"form-control\" value=\"$data[hasil_lab]\">
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