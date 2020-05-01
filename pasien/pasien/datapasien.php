<?php include('../../navbar2.php'); ?>
<div class="container">
<form action = "" method = "POST">	
	<section class="col-lg-11">
                
        <div class="table-responsive">
			<div class="page-header">
                <div class="panel panel-Primary">
            <div class="panel-heading">
                <b>Pasien</b>
            </div>				
			<div class="panel-body">	
            <table class="table">
				<thead>
					<tr class="Info">
						<th>Nomor pasien</th>
						<th>Nama pasien</th>
						<th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Usia</th>
                        <th>No Telepon</th>
                        <th>NO KK</th>
                        <th>Hub Keluarga</th>
						<th>Opsi</th>
					</tr>
				</thead>
<?php
    
    include '../../koneksi/config.php';
    $data1 = mysqli_query($dbconnect,"SELECT * FROM pasien");
    while($data=mysqli_fetch_array($data1))
    {

    echo "<tr>";
    echo  "<td>" .$data['no_pasien'], "</td>";
    echo  "<td>" .$data['nm_pasien'], "</td>";        
    echo  "<td>" .$data['j_kel'], "</td>"; 
    echo  "<td>" .$data['agama'], "</td>";
    echo  "<td>" .$data['alamat'], "</td>";        
    echo  "<td>" .$data['tgl_lhr'], "</td>";
    echo  "<td>" .$data['usia'], "</td>";
    echo  "<td>" .$data['no_tlp'], "</td>";        
    echo  "<td>" .$data['nm_kk'], "</td>";     
     echo  "<td>" .$data['hub_kel'], "</td>";       
    echo  "<td>".
        	"<a href='deletepasien.php?no_pasien=$data[no_pasien]' class='btn btn-danger btn-sm'>
                <span class='glyphicon glyphicon-trash'> Hapus</span></a>
           
            <a href='editpasien.php?no_pasien=$data[no_pasien]' class='btn btn-warning btn-sm'>
                <span class='glyphicon glyphicon-edit'> edit</span></a>",
        "</td></tr>";
 
 }?>
    <?php
    
    ?>
    </table>
    <a href="formpasien.php" class="btn btn-warning btn-sm">
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