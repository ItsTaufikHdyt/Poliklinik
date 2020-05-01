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
                <b>Kunjungan</b>
            </div>        
      <div class="panel-body">
      <table class="table">
        <form role="form" class="form-horizontal" action = "" method = "POST">
   <div class="form-group">
    <label>Tanggal Kunjungan</label>
    <input type="text" name="tgl_kunjungan" class="form-control">
   </div>
   <div class="form-group">
    <label>No Pasien</label>
    <input type="text" name="no_pasien" class="form-control">
   </div>
   <div class="form-group">
    <label>Kode Poli</label>
    <input type="text" name="kd_poli" class="form-control">
   </div>
   <div class="form-group">
    <label>Jam Kunjungan</label>
    <input type="text" name="jam_kunjungan" class="form-control">
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
        $tgl_kunjungan = $dbconnect -> real_escape_string($_POST['tgl_kunjungan']);
        $no_pasien = $dbconnect -> real_escape_string($_POST['no_pasien']);
        $kd_poli = $dbconnect -> real_escape_string($_POST['kd_poli']);
        $jam_kunjungan = $dbconnect -> real_escape_string($_POST['jam_kunjungan']);
        
      
        $SQL = $dbconnect -> prepare ("INSERT INTO kunjungan (tgl_kunjungan,no_pasien,kd_poli,jam_kunjungan) VALUES (?,?,?,?)");
        $SQL -> bind_param("ssss",$tgl_kunjungan,$no_pasien,$kd_poli,$jam_kunjungan);
        $SQL -> execute();
      
            if(!$SQL)
                {
                    echo $mysqliconn -> error;
                }
                    header("location: datakunjungan.php");
                }
?>
<?php include('../../footer.php'); ?>