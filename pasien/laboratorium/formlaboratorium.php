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
                <b>Laboratorium</b>
            </div>        
      <div class="panel-body">
      <table class="table">
        <form role="form" class="form-horizontal" action = "" method = "POST">
   <div class="form-group">
    <label>Kode Lab</label>
    <input type="text" name="kd_lab" class="form-control">
   </div>
   <div class="form-group">
    <label>No RM</label>
    <input type="text" name="no_rm" class="form-control">
   </div>
   <div class="form-group">
    <label>Hasil Lab</label>
    <input type="text" name="hasil_lab" class="form-control">
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
 
  if(isset($_POST['save'])){
  $kd_lab     = $_POST['kd_lab'];
  $no_rm    = $_POST['no_rm'];
  $hasil_lab= $_POST['hasil_lab'];
  $ket  = $_POST['ket'];
  $querytambah = mysqli_query($dbconnect, "INSERT INTO laboratorium VALUES( '$kd_lab', '$no_rm', '$hasil_lab', '$ket')") or die(mysqli_error());
  if($querytambah) {
    header('location: datalaboratorium.php');
   } else{
    echo "Upss Something wrong..";
   }
  }
 ?>
<?php include('../../footer.php'); ?>