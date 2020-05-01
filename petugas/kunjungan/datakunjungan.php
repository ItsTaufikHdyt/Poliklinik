<?php include('../../navbar1.php'); ?>
<div class="container">
<form action = "" method = "POST">	
	<section class="col-lg-11">
                
        <div class="table-responsive">
			<div class="page-header">
                <div class="panel panel-Primary">
            <div class="panel-heading">
                <b>Kunjungan</b>
            </div>				
			<div class="panel-body">	
            <table class="table">
				<thead>
					<tr class="Info">
						<th>Tanggal Kunjungan</th>
						<th>No Pasien</th>
						<th>Kode Poli</th>
                        <th>Jam Kunjungan</th>
						<th>Opsi</th>
					</tr>
				</thead>
<?php
    
    include '../../koneksi/config.php';
    $data1 = mysqli_query($dbconnect,"SELECT * FROM kunjungan");
    while($data=mysqli_fetch_array($data1))
    {

    echo "<tr>";
    echo  "<td>" .$data['tgl_kunjungan'], "</td>";
    echo  "<td>" .$data['no_pasien'], "</td>";        
    echo  "<td>" .$data['kd_poli'], "</td>";  
    echo  "<td>" .$data['jam_kunjungan'], "</td>";      
    echo  "<td>".
        	"<a href='deletekunjungan.php?tgl_kunjungan=$data[tgl_kunjungan]' class='btn btn-danger btn-sm'>
                <span class='glyphicon glyphicon-trash'> Hapus</span></a>
           
            <a href='editkunjungan.php?tgl_kunjungan=$data[tgl_kunjungan]' class='btn btn-warning btn-sm'>
                <span class='glyphicon glyphicon-edit'> edit</span></a>",
        "</td></tr>";
 
 }?>
    <?php
    
    ?>
    </table>
    <a href="formkunjungan.php" class="btn btn-warning btn-sm">
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