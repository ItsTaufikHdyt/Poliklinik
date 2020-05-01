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
                <b>obat</b>
            </div>        
      <div class="panel-body">
      <table class="table">
        <form role="form" class="form-horizontal" action = "" method = "POST">
   <div class="form-group">
    <label>Kode obat</label>
    <input type="text" name="kd_obat" class="form-control">
   </div>
   <div class="form-group">
    <label>Nama obat</label>
    <input type="text" name="nm_obat" class="form-control">
   </div>
   <div class="form-group">
    <label>Jumlah obat</label>
    <input type="text" name="jml_obat" class="form-control">
   </div>
   <div class="form-group">
    <label>Ukuran</label>
    <input type="text" name="ukuran" class="form-control">
   </div>
   <div class="form-group">
    <label>Harga</label>
    <input type="text" name="harga" class="form-control">
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
        $kd_obat = $dbconnect -> real_escape_string($_POST['kd_obat']);
        $nm_obat = $dbconnect -> real_escape_string($_POST['nm_obat']);
        $jml_obat = $dbconnect -> real_escape_string($_POST['jml_obat']);
        $ukuran = $dbconnect -> real_escape_string($_POST['ukuran']);
        $harga = $dbconnect -> real_escape_string($_POST['harga']);
        
      
        $SQL = $dbconnect -> prepare ("INSERT INTO obat (kd_obat,nm_obat,jml_obat,ukuran,harga) VALUES (?,?,?,?,?)");
        $SQL -> bind_param("sssss",$kd_obat,$nm_obat,$jml_obat,$ukuran,$harga);
        $SQL -> execute();
      
            if(!$SQL)
                {
                    echo $mysqliconn -> error;
                }
                    header("location: dataobat.php");
                }
?>
<?php include('../../footer.php'); ?>