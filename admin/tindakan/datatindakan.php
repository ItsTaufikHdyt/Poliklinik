<?php include('../../navbar.php'); ?>
<div class="container">
<form action = "" method = "POST">	
	<section class="col-lg-11">
                
        <div class="table-responsive">
			<div class="page-header">
                <div class="panel panel-Primary">
            <div class="panel-heading">
                <b>Tindakan</b>
            </div>				
			<div class="panel-body">	
            <table class="table">
				<thead>
					<tr class="Info">
						<th>Kode Tindakan</th>
						<th>Nama Tindakan</th>
						<th>Keterangan</th>
						<th>Opsi</th>
					</tr>
				</thead>
<?php
    
    include '../../koneksi/config.php';
    $data1 = mysqli_query($dbconnect,"SELECT * FROM tindakan");
    while($data=mysqli_fetch_array($data1))
    {

    echo "<tr>";
    echo  "<td>" .$data['kd_tindakan'], "</td>";
    echo  "<td>" .$data['nm_tindakan'], "</td>";        
    echo  "<td>" .$data['ket'], "</td>";       
    echo  "<td>".
        	"<a href='deletetindakan.php?kd_tindakan=$data[kd_tindakan]' class='btn btn-danger btn-sm'>
                <span class='glyphicon glyphicon-trash'> Hapus</span></a>
           
            <a href='edittindakan.php?kd_tindakan=$data[kd_tindakan]' class='btn btn-warning btn-sm'>
                <span class='glyphicon glyphicon-edit'> edit</span></a>",
        "</td></tr>";
 
 }?>
    <?php
    
    ?>
    </table>
    <a href="formtindakan.php" class="btn btn-warning btn-sm">
        <span class="glyphicon glyphicon-plus"> Tambah Data</span>
    </a> 
</div>
</div>
</div>
</div>
</section>
</form>
</div>
<?php include('../../footer.php'); ?>