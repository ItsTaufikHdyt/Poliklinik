<?php include('../../navbar.php'); ?>
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
                        <th>No Rekam Medis</th>
                        <th>Kode Tindakan</th>
                        <th>Kode Obat</th>
                        <th>Kode User</th>
                        <th>No Pasien</th>
                        <th>Diagnosa</th>
                        <th>Resep</th>
                        <th>Keluhan</th>
                        <th>Tanggal Pemeriksaan</th>
                        <th>Keterangan</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
<?php
    
    include '../../koneksi/config.php';
    $data1 = mysqli_query($dbconnect,"SELECT * FROM rekammedis");
    while($data=mysqli_fetch_array($data1))
    {

    echo "<tr>";
    echo  "<td>" .$data['no_rm'], "</td>";
    echo  "<td>" .$data['kd_tindakan'], "</td>";        
    echo  "<td>" .$data['kd_obat'], "</td>"; 
    echo  "<td>" .$data['kd_user'], "</td>";
    echo  "<td>" .$data['no_pasien'], "</td>";        
    echo  "<td>" .$data['diagnosa'], "</td>";
    echo  "<td>" .$data['resep'], "</td>";
    echo  "<td>" .$data['keluhan'], "</td>";        
    echo  "<td>" .$data['tgl_pemeriksaan'], "</td>";     
     echo  "<td>" .$data['ket'], "</td>";       
    echo  "<td>".
            "<a href='deleterekammedis.php?no_rm=$data[no_rm]' class='btn btn-danger btn-sm'>
                <span class='glyphicon glyphicon-trash'> Hapus</span></a>
           
            <a href='editrekammedis.php?no_rm=$data[no_rm]' class='btn btn-warning btn-sm'>
                <span class='glyphicon glyphicon-edit'> edit</span></a>",
        "</td></tr>";
 
 }?>
    <?php
    
    ?>
    </table>
    <a href="formrekammedis.php" class="btn btn-warning btn-sm">
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