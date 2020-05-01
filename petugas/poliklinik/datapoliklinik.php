<?php include('../../navbar1.php'); ?>
<div class="container">
<form action = "" method = "POST">	
	<section class="col-lg-11">
                
        <div class="table-responsive">
			<div class="page-header">
                <div class="panel panel-Primary">
            <div class="panel-heading">
                <b>Poliklinik</b>
            </div>				
			<div class="panel-body">	
            <table class="table">
				<thead>
					<tr class="Info">
						<th>Kode Poli</th>
						<th>Nama Poli</th>
						<th>Lantai</th>
						<th>opsi</th>
					</tr>
				</thead>
<?php
    
    include '../../koneksi/config.php';
    $data1 = mysqli_query($dbconnect,"SELECT * FROM poliklinik");
    while($data=mysqli_fetch_array($data1))
    {

    echo "<tr>";
    echo  "<td>" .$data['kd_poli'], "</td>";
    echo  "<td>" .$data['nm_poli'], "</td>";        
    echo  "<td>" .$data['lantai'], "</td>";       
    echo  "<td>".
        	"<a href='deletepoliklinik.php?kd_poli=$data[kd_poli]' class='btn btn-danger btn-sm'>
                <span class='glyphicon glyphicon-trash'> Hapus</span></a>
           
            <a href='editpoliklinik.php?kd_poli=$data[kd_poli]' class='btn btn-warning btn-sm'>
                <span class='glyphicon glyphicon-edit'> edit</span></a>",
        "</td></tr>";
 
 }?>
    <?php
    
    ?>
    </table>
    <a href="formpoliklinik.php" class="btn btn-warning btn-sm">
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