<?php 
ob_start();
include '../../koneksi/config.php';
include('../../navbar2.php'); ?>
<div class="container">
<form action = "" method = "POST">  
  <section class="col-lg-7">
                
        <div class="table-responsive">
      <div class="page-header">
                <div class="panel panel-Primary">
            <div class="panel-heading">
                <b>Pasien</b>
            </div>        
      <div class="panel-body">
      <table class="table">
        <form role="form" class="form-horizontal" action = "" method = "POST">
   <div class="form-group">
    <label>No pasien</label>
    <input type="text" name="no_pasien" class="form-control">
   </div>
   <div class="form-group">
    <label>Nama pasien</label>
    <input type="text" name="nm_pasien" class="form-control">
   </div>
   <div class="form-group">
    <label>Jenis Kelamin</label>
    <input type="text" name="j_kel" class="form-control">
   </div>
   <div class="form-group">
    <label>Agama</label>
    <input type="text" name="agama" class="form-control">
   </div>
   <div class="form-group">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control">
   </div>
   <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="text" name="tgl_lhr" class="form-control">
   </div>
   <div class="form-group">
    <label>Usia</label>
    <input type="text" name="usia" class="form-control">
   </div>
   <div class="form-group">
    <label>No Telepon</label>
    <input type="text" name="no_tlp" class="form-control">
   </div>
   <div class="form-group">
    <label>No KK</label>
    <input type="text" name="nm_kk" class="form-control">
   </div>
   <div class="form-group">
    <label>Hubungan Keluarga</label>
    <input type="text" name="hub_kel" class="form-control">
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
        $no_pasien = $dbconnect -> real_escape_string($_POST['no_pasien']);
        $nm_pasien = $dbconnect -> real_escape_string($_POST['nm_pasien']);
        $j_kel = $dbconnect -> real_escape_string($_POST['j_kel']);
        $agama = $dbconnect -> real_escape_string($_POST['agama']);
        $alamat = $dbconnect -> real_escape_string($_POST['alamat']);
        $tgl_lhr = $dbconnect -> real_escape_string($_POST['tgl_lhr']);
        $usia = $dbconnect -> real_escape_string($_POST['usia']);
        $no_tlp = $dbconnect -> real_escape_string($_POST['no_tlp']);
        $nm_kk = $dbconnect -> real_escape_string($_POST['nm_kk']);
        $hub_kel = $dbconnect -> real_escape_string($_POST['hub_kel']);
        
      
        $SQL = $dbconnect -> prepare ("INSERT INTO pasien (no_pasien,nm_pasien,j_kel,agama,alamat,tgl_lhr,usia,no_tlp,nm_kk,hub_kel) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $SQL -> bind_param("ssssssssss",$no_pasien,$nm_pasien,$j_kel,$agama,$alamat,$tgl_lhr,$usia,$no_tlp,$nm_kk,$hub_kel);
        $SQL -> execute();
      
            if(!$SQL)
                {
                    echo $mysqliconn -> error;
                }
                    header("location: datapasien.php");
                }
?>
<?php include('../../footer.php'); ?>