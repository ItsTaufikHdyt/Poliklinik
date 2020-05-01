<?php 
ob_start();
include('../../navbar1.php'); ?>
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
    <label>Kode Tindakan</label>
    <input type="text" name="kd_tindakan" class="form-control">
   </div>
   <div class="form-group">
    <label>Nama Tindakan</label>
    <input type="text" name="nm_tindakan" class="form-control">
   </div>
   <div class="form-group">
    <label>Ket</label>
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
        $kd_tindakan = $dbconnect -> real_escape_string($_POST['kd_tindakan']);
        $nm_tindakan = $dbconnect -> real_escape_string($_POST['nm_tindakan']);
        $ket = $dbconnect -> real_escape_string($_POST['ket']);
        
      
        $SQL = $dbconnect -> prepare ("INSERT INTO tindakan (kd_tindakan,nm_tindakan,ket) VALUES (?,?,?)");
        $SQL -> bind_param("sss",$kd_tindakan,$nm_tindakan,$ket);
        $SQL -> execute();
      
            if(!$SQL)
                {
                    echo $mysqliconn -> error;
                }
                    header("location: datatindakan.php");
                }
?>
<?php include('../../footer.php'); ?>