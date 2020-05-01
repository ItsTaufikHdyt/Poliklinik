<?php 
ob_start();
include '../../koneksi/config.php';
include('../../navbar.php'); ?>
<div class="container">
<form action = "" method = "POST">  
  <section class="col-lg-7">
                
        <div class="table-responsive">
      <div class="page-header">
                <div class="panel panel-Primary">
            <div class="panel-heading">
                <b>Tindakan</b>
            </div>        
      <div class="panel-body">
      <table class="table">
        <form role="form" class="form-horizontal" action = "" method = "POST">
   <div class="form-group">
    <label>No Rekam Medis</label>
    <input type="text" name="no_rm" class="form-control">
   </div>
   <div class="form-group">
    <label>Kode Tindakan</label>
    <input type="text" name="kd_tindakan" class="form-control">
   </div>
   <div class="form-group">
    <label>Kode Obat</label>
    <input type="text" name="kd_obat" class="form-control">
   </div>
   <div class="form-group">
    <label>Kode User</label>
    <input type="text" name="kd_user" class="form-control">
   </div>
   <div class="form-group">
    <label>No Pasien</label>
    <input type="text" name="no_pasien" class="form-control">
   </div>
   <div class="form-group">
    <label>Diagnosa</label>
    <input type="text" name="diagnosa" class="form-control">
   </div>
   <div class="form-group">
    <label>Resep</label>
    <input type="text" name="resep" class="form-control">
   </div>
   <div class="form-group">
    <label>keluhan</label>
    <input type="text" name="keluhan" class="form-control">
   </div>
   <div class="form-group">
    <label>Tanggal Pemeriksaan</label>
    <input type="text" name="tgl_pemeriksaan" class="form-control">
   </div>
   <div class="form-group">
    <label>ket</label>
    <input type="text" name="ket" class="form-control">
   </div>
   <div class="form-group">
    <button type="submit" class="btn btn-primary" name="save" value="save">
    <span class="glyphicon glyphicon-floppy-saved"> Save</span>
    </button>
    <button type="reset" class="btn btn-danger">
    <span class="glyphicon glyphicon-floppy-remove"> Reset</span>
  </button>
  </div>
    </form>
    </div>
      </div>
        </div>
         </table>
          </div>
           </div>
              </div>
                </div>
             </section>
                </form>
                </div>
 <?php
    include '../../koneksi/config.php';
    if (isset($_POST['save']))
    {
        $no_rm = $dbconnect -> real_escape_string($_POST['no_rm']);
        $kd_tindakan = $dbconnect -> real_escape_string($_POST['kd_tindakan']);
        $kd_obat = $dbconnect -> real_escape_string($_POST['kd_obat']);
        $kd_user = $dbconnect -> real_escape_string($_POST['kd_user']);
        $no_pasien = $dbconnect -> real_escape_string($_POST['no_pasien']);
        $diagnosa = $dbconnect -> real_escape_string($_POST['diagnosa']);
        $resep = $dbconnect -> real_escape_string($_POST['resep']);
        $keluhan = $dbconnect -> real_escape_string($_POST['keluhan']);
        $tgl_pemeriksaan = $dbconnect -> real_escape_string($_POST['tgl_pemeriksaan']);
        $ket = $dbconnect -> real_escape_string($_POST['ket']);
        
      
        $SQL = $dbconnect -> prepare ("INSERT INTO rekammedis (no_rm,kd_tindakan,kd_obat,kd_user,no_pasien,diagnosa,resep,keluhan,tgl_pemeriksaan,ket) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $SQL -> bind_param("ssssssssss",$no_rm,$kd_tindakan,$kd_obat,$kd_user,$no_pasien,$diagnosa,$resep,$keluhan,$tgl_pemeriksaan,$ket);
        $SQL -> execute();
      
            if(!$SQL)
                {
                    echo $mysqliconn -> error;
                }
                    header("location: datarekammedis.php");
                }
?>
<?php include('../../footer.php'); ?>