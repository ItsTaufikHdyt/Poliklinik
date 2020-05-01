<?php include('../../navbar.php'); ?>
<div class="container">
<form action = "" method = "POST">	
	<section class="col-lg-11">
                
        <div class="table-responsive">
			<div class="page-header">
                <div class="panel panel-Primary">
            <div class="panel-heading">
                <b>Laboratorium</b>
            </div>				
			<div class="panel-body">	
            <table class="table">
				<thead>
					<tr class="Info">
						<th>Kode Lab</th>
						<th>Nomor Rekam Medis</th>
						<th>Hasil Lab</th>
                        <th>Ket</th>
						<th>Opsi</th>
					</tr>
				</thead>
<?php
    
    include '../../koneksi/config.php';
    $data1 = mysqli_query($dbconnect,"SELECT * FROM laboratorium");
    while($data=mysqli_fetch_array($data1))
    {

    echo "<tr>";
    echo  "<td>" .$data['kd_lab'], "</td>";
    echo  "<td>" .$data['no_rm'], "</td>"; 
    echo  "<td>" .$data['hasil_lab'], "</td>";       
    echo  "<td>" .$data['ket'], "</td>";       
    echo  "<td>".
        	"<a href='deletelaboratorium.php?kd_lab=$data[kd_lab]' class='btn btn-danger btn-sm'>
                <span class='glyphicon glyphicon-trash'> Hapus</span></a>
           
            <a href='editlaboratorium.php?kd_lab=$data[kd_lab]' class='btn btn-warning btn-sm'>
                <span class='glyphicon glyphicon-edit'> edit</span></a>",
        "</td></tr>";
 
 }?>
    <?php
    
    ?>
    </table>
    <a href="formlaboratorium.php" class="btn btn-warning btn-sm">
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