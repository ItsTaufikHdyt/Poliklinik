<?php 
ob_start();
include '../../koneksi/config.php';
include('../../navbar1.php'); ?>
<div class="container">
<form action = "" method = "POST">  
  <section class="col-lg-7">
                
        <div class="table-responsive">
      <div class="page-header">
                <div class="panel panel-Primary">
            <div class="panel-heading">
                <b>Dokter</b>
            </div>        
      <div class="panel-body">
      <table class="table">
        <form role="form" class="form-horizontal" action = "" method = "POST">
   <div class="form-group">
    <label>Kode Dokter</label>
    <input tgl_kunjungan="text" name="kd_dokter" class="form-control">
   </div>
   <div class="form-group">
    <label>Kode Poli</label>
    <input tgl_kunjungan="text" name="kd_poli" class="form-control">
   </div>
   <div class="form-group">
    <label>Tanggal Kunjungan</label>
    <input tgl_kunjungan="text" name="tgl_kunjungan" class="form-control" id="tgl_kunjungan">
   </div>
   <div class="form-group">
    <label>Kode User</label>
    <input tgl_kunjungan="text" name="kd_user" class="form-control">
   </div>
   <div class="form-group">
    <label>Nama Dokter</label>
    <input tgl_kunjungan="text" name="nm_dokter" class="form-control">
   </div>
   <div class="form-group">
    <label>SIP</label>
    <input tgl_kunjungan="text" name="sip" class="form-control">
   </div>
   <div class="form-group">
    <label>Tempat Lahir</label>
    <input tgl_kunjungan="text" name="tmpat_lahir" class="form-control">
   </div>
   <div class="form-group">
    <label>No Telepon</label>
    <input tgl_kunjungan="text" name="no_tlp" class="form-control">
   </div>
   <div class="form-group">
    <label>Alamat</label>
    <input tgl_kunjungan="text" name="alamat" class="form-control">
   </div>
   <div class="form-group">
    <button tgl_kunjungan="submit" class="btn btn-primary" name="save" value="save">
    <span class="glyphicon glyphicon-floppy-saved"> Save</span>
    </button>
    <button tgl_kunjungan="reset" class="btn btn-danger">
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
        $kd_dokter = $dbconnect -> real_escape_string($_POST['kd_dokter']);
        $kd_poli = $dbconnect -> real_escape_string($_POST['kd_poli']);
        $tgl_kunjungan = $dbconnect -> real_escape_string($_POST['tgl_kunjungan']);
        $kd_user = $dbconnect -> real_escape_string($_POST['kd_user']);
        $nm_dokter = $dbconnect -> real_escape_string($_POST['nm_dokter']);
        $sip = $dbconnect -> real_escape_string($_POST['sip']);
        $tmpat_lahir = $dbconnect -> real_escape_string($_POST['tmpat_lahir']);
        $no_tlp = $dbconnect -> real_escape_string($_POST['no_tlp']);
        $alamat = $dbconnect -> real_escape_string($_POST['alamat']);
        
        $SQL = $dbconnect -> prepare ("INSERT INTO dokter (kd_dokter,kd_poli,tgl_kunjungan,kd_user,nm_dokter,sip,tmpat_lahir,no_tlp,alamat) VALUES (?,?,?,?,?,?,?,?,?)");
        $SQL -> bind_param("sssssssss",$kd_dokter,$kd_poli,$tgl_kunjungan,$kd_user,$nm_dokter,$sip,$tmpat_lahir,$no_tlp,$alamat);
        $SQL -> execute();
      
            if(!$SQL)
                {
                    echo $mysqliconn -> error;
                }
                    header("location: datadokter.php");
                }
?>
<script src="../../asset/datepicker/bootstrap-datepicker.js"></script>
  
  <script>
  $( function() {
    $("#tgl_kunjungan").datepicker({
      
      isRTL: false,
      format:"yyyy-mm-dd",
      autoclose:true
    });
  });
  </script>
<?php include('../../footer.php'); ?>