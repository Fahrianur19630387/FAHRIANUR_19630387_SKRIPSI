<?php  
include "../fungsi/koneksi.php";
include "../fungsi/fungsi.php";


if (isset($_GET['aksi']) && isset($_GET['id'])) {
        //die($id = $_GET['id']);
  $id = $_GET['id'];
  echo $id;

  if ($_GET['aksi'] == 'edit') {
    header("location:?p=edit-m1&id=$id");
  } else if ($_GET['aksi'] == 'hapus') {
    header("location:?p=hapusmaterial-m1&id=$id");
  } 
}

if(isset($_GET['no_vaksin'])){
  $no_vaksin = $_GET['no_vaksin'];
  $query = mysqli_query($koneksi, "SELECT * FROM tb_vaksin WHERE no_vaksin='$no_vaksin' ");    
} else {
  $query = mysqli_query($koneksi, "SELECT * FROM tb_vaksin");        
}



?>
<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-sm-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="text-center">Olah Data Vaksin</h3>
        </div>                
        <div class="box-body">
          <div class="row">
            <div class="col-md-2">
              <a href="index.php?p=tambah_vaksin" class=" btn btn-primary"><i class="fa fa-plus"></i> Tambah Data Stok</a><br>						
            </div>

            <div class="col-md-2 pull-right">
              <a target="_blank" href="cetakstok.php?idjenis=<?= $no_vaksin;  ?>" class="btn btn-success"><i class="fa fa-print"></i> Cetak Data Stok</a><br>
            </div>
            <br><br>
          </div>                        
          <div class="table-responsive">
            <table class="table text-center" id="data_vaksin">
             <thead  > 
              <tr>
               <th>No</th>	  
               <th>No Vaksin</th>        				
               <th>Nama Barang</th>
               <th>Satuan</th>
               <th>Category</th> 
               <th>Aksi</th>	                				
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
                <td> <?= $row['no_vaksin']; ?> </td>          					
                <td style="text-align: left;"> <?= $row['nama']; ?> </td>
                <td> <?= $row['satuan']; ?> </td>
                <td> <?= $row['category']; ?> </td>
                


                <td>
                  <a href="?p=data_vaksin&aksi=edit_vaksin&no_vaksin=<?= $row['no_vaksin']; ?>"><span data-placement='top' data-toggle='tooltip' title='Edit'><button  class="btn btn-info">Edit</button></span></a>                     

                  <a href="?p=user&aksi=hapus&id=<?= $row['id_user']; ?>"><span data-placement='top' data-toggle='tooltip' title='Hapus'><button  class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button></span></a>                
                </td>              					
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
    $("#data_vaksin").DataTable({
     "language": {
      "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
      "sEmptyTable": "Tidak ada data di database"
    }
  });
  });
</script> 

