<?php include('../../navbar.php'); ?>
 
 <?php
include("../../koneksi/config.php");
$kd_poli=$_GET['kd_poli'];
$edit= "SELECT * FROM poliklinik WHERE kd_poli='$kd_poli'";
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
<form method=\"POST\" action=\"updatepoliklinik.php?kd_poli=$kd_poli\" class=\"form-horizontal\">
<div class=\"form-group\">
    <label>Kode Poli</label>
    <input type=\"text\" name=\"kd_poli\" class=\"form-control\" value=\"$data[kd_poli]\">
   </div>
   <div class=\"form-group\">
    <label>Nama Poli</label>
    <input type=\"text\" name=\"nm_poli\" class=\"form-control\" value=\"$data[nm_poli]\">
   </div>
   <div class=\"form-group\">
    <label>Lantai</label>
    <input type=\"text\" name=\"lantai\" class=\"form-control\" value=\"$data[lantai]\">
   </div>
   <div class=\"form-group\">
    <button type=\"submit\" class=\"btn btn-primary\" name=\"update\" value=\"update\">
    <span class=\"glyphicon glyphicon-floppy-open\"> Update</span>
    </button>
    </div>";
    ?>