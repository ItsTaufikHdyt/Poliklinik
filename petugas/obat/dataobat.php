<?php include('../../navbar1.php'); ?>
<div class="container">
<form action = "" method = "POST">	
	<section class="col-lg-11">
                
        <div class="table-responsive">
			<div class="page-header">
                <div class="panel panel-Primary">
            <div class="panel-heading">
                <b>Obat</b>
            </div>				
			<div class="panel-body">	
            <table class="table">
				<thead>
					<tr class="Info">
						<th>Kode Obat</th>
						<th>Nama Obat</th>
						<th>Jumlah Obat</th>
                        <th>Ukuran</th>
                        <th>Hargat</th>
						<th>Opsi</th>
					</tr>
				</thead>
<?php
    
    include '../../koneksi/config.php';
    $data1 = mysqli_query($dbconnect,"SELECT * FROM obat");
    while($data=mysqli_fetch_array($data1))
    {

    echo "<tr>";
    echo  "<td>" .$data['kd_obat'], "</td>";
    echo  "<td>" .$data['nm_obat'], "</td>";        
    echo  "<td>" .$data['jml_obat'], "</td>"; 
    echo  "<td>" .$data['ukuran'], "</td>";        
    echo  "<td>" .$data['harga'], "</td>";        
    echo  "<td>".
        	"<a href='deleteobat.php?kd_obat=$data[kd_obat]' class='btn btn-danger btn-sm'>
                <span class='glyphicon glyphicon-trash'> Hapus</span></a>
           
            <a href='editobat.php?kd_obat=$data[kd_obat]' class='btn btn-warning btn-sm'>
                <span class='glyphicon glyphicon-edit'> edit</span></a>",
        "</td></tr>";
 
 }?>
    <?php
    
    ?>
    </table>
    <a href="formobat.php" class="btn btn-warning btn-sm">
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