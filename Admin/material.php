<?php  
include "../fungsi/koneksi.php";
include "../fungsi/fungsi.php";


if (isset($_GET['aksi']) && isset($_GET['id'])) {
        //die($id = $_GET['id']);
    $id = $_GET['id'];
    echo $id;

    if ($_GET['aksi'] == 'edit') {
        header("location:?p=edit&id=$id");
    } else if ($_GET['aksi'] == 'hapus') {
        header("location:?p=hapus&id=$id");
    } 
}

if(isset($_GET['id_jenis'])){
    $id_jenis = $_GET['id_jenis'];
    $query = mysqli_query($koneksi, "SELECT * FROM stokbarang WHERE id_jenis='$id_jenis' ");    
} else {
    $query = mysqli_query($koneksi, "SELECT * FROM stokbarang");        
}



?>
<main>
     <div class="row">
          <div class="col-lg-12">
            <h1>DATA &raquo;<small>STOK BARANG</small></div></h1>
           <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="index.php?p=laporanadmin" >Data Barang</a></li>
    <li class="breadcrumb-item">DATA STOK BARANG</a></li>
    <li class="breadcrumb-item">  <a target="_blank" href="cetakstok.php?idjenis=<?= $id_jenis;  ?>" class="btn btn-success"><i class="fa fa-print"></i> Cetak Data Stok</a></a></li>

  </ol>
<!-- Main content -->
<section class="content">
<!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm-12">
             <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="text-center">Olah Data Stok Barang</h3>
                </div>                
                <div class="box-body">
               <div class="row">
                
                 
                </div>                  
                    <div class="table-responsive">
                        <table class="table text-center" id="material">
                            <thead  > 
                                <tr>
                                   <th>No</th>    

                     <th>Kode Barang</th>                       
                     <th>Nama Barang</th>
                     <th>Category</th>
                     <th>Satuan</th>

                     <th>Keluar</th>
                     <th>Stok</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php 
                                        $no =1 ;
                                        if (mysqli_num_rows($query)) {
                                            while($row=mysqli_fetch_assoc($query)):

                                     ?>
                                        <td> <?= $no; ?> </td>

                                        <td> <?= $row['kode_brg']; ?> </td>                                        
                                        <td> <?= $row['nama_brg']; ?> </td>
                                        <td> <?= $row['category']; ?> </td>
                                        <td> <?= $row['satuan']; ?> </td>
                                        <td> <?= $row['keluar']; ?> </td>
                                        <td> <?= $row['stok']; ?> </td>


                                        
                                        
                                        
                                        
                                                                      
                                </tr>
                            <?php $no++; endwhile; } ?>
                            </tbody>
                        </table>
                    </div>                  
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    $(function(){
        $("#material").DataTable({
             "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
            "sEmptyTable": "Tidak ada data di database"
            }
        });
    });
</script> 
