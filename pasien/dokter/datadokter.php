<?php include('../../navbar2.php'); ?>
<div class="container">
<form action = "" method = "POST">  
    <section class="col-lg-11">
                
        <div class="table-responsive">
            <div class="page-header">
                <div class="panel panel-Primary">
            <div class="panel-heading">
                <b>Dokter</b>
            </div>              
            <div class="panel-body">    
            <table class="table">
                <thead>
                    <tr class="Info">
                        <th>Kode Dokter</th>
                        <th>Kode Poli</th>
                        <th>Tanggal Kunjungan</th>
                        <th>Kode User</th>
                        <th>Nama Dokter</th>
                        <th>SIP</th>
                        <th>Tempat Lahir</th>
                        <th>No Telepon</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
<?php
    
    include '../../koneksi/config.php';
    $data1 = mysqli_query($dbconnect,"SELECT * FROM dokter");
    while($data=mysqli_fetch_array($data1))
    {

    echo "<tr>";
    echo  "<td>" .$data['kd_dokter'], "</td>";
    echo  "<td>" .$data['kd_poli'], "</td>";        
    echo  "<td>" .$data['tgl_kunjungan'], "</td>"; 
    echo  "<td>" .$data['kd_user'], "</td>";
    echo  "<td>" .$data['nm_dokter'], "</td>";        
    echo  "<td>" .$data['sip'], "</td>";
    echo  "<td>" .$data['tmpat_lahir'], "</td>";
    echo  "<td>" .$data['no_tlp'], "</td>";        
    echo  "<td>" .$data['alamat'], "</td>";          
    
 }?>
    <?php
    
    ?>
    </table>
</div>
</div>
</div>
</div>
</section>
</form>
</div>
<?php include('../../footer.php'); ?>