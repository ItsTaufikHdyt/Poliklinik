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
                <b>PoliKlinik</b>
            </div>        
      <div class="panel-body">
      <table class="table">
        <form role="form" class="form-horizontal" action = "" method = "POST">
   <div class="form-group">
    <label>Kode Poli</label>
    <input type="text" name="kd_poli" class="form-control">
   </div>
   <div class="form-group">
    <label>Nama Poli</label>
    <input type="text" name="nm_poli" class="form-control">
   </div>
   <div class="form-group">
    <label>Lantai</label>
    <input type="text" name="lantai" class="form-control">
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
        $kd_poli = $dbconnect -> real_escape_string($_POST['kd_poli']);
        $nm_poli = $dbconnect -> real_escape_string($_POST['nm_poli']);
        $lantai = $dbconnect -> real_escape_string($_POST['lantai']);
        
      
        $SQL = $dbconnect -> prepare ("INSERT INTO poliklinik (kd_poli,nm_poli,lantai) VALUES (?,?,?)");
        $SQL -> bind_param("sss",$kd_poli,$nm_poli,$lantai);
        $SQL -> execute();
      
            if(!$SQL)
                {
                    echo $mysqliconn -> error;
                }
                    header("location: datapoliklinik.php");
                }
?>
<?php include('../../footer.php'); ?>