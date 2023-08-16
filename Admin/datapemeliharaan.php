<?php  
include "../fungsi/koneksi.php";
include "../fungsi/fungsi.php";

if (isset($_GET['aksi']) && isset($_GET['tgl'])) {
        //die($id = $_GET['id']);
  $tgl = $_GET['tgl'];
  echo $tgl;

  if ($_GET['aksi'] == 'detil') {
    header("location:?p=detil&tgl=$tgl");
  } 
}

  $query = mysqli_query($koneksi, "SELECT * FROM pemeliharaan");	

?>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-sm-12">
     <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="text-center">Data Pemeliharaan Barang</h3>
      </div>                
      <div class="box-body">
        <a href="index.php?p=formpemeliharaan" style="margin:10px 15px;" class="btn btn-success"><i class='fa fa-plus'> Form Pemeliharaan Barang</i></a>
        <div class="table-responsive">
          <table class="table text-center">
            <thead  > 
              <tr>
                <th>No</th>                                                                           
                <th>No Service</th>                  
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah</th> 
                <th>Catatan</th>               
                <th>Status</th>
                <th>Gambar</th>
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



<?php 
                            $sekarang  = date("Y-m-d");
                            $queryTampil = mysqli_query($koneksi, "SELECT * FROM pemeliharaan  " );
                            $no = 1;
                            if(mysqli_num_rows($queryTampil) > 0) {
                                while($row = mysqli_fetch_assoc($queryTampil)):


                                   ?>
                                   <td><?php echo $no; ?></td>
                                   <td><?php echo $row['no_service']; ?></td>
                                   <td><?php echo $row['kode_brg']; ?></td>
                                   <td><?php echo $row['nama_brg']; ?></td>
                                   <td><?php echo $row['jumlah']; ?> </td>
                                   <td><?php echo $row['catatan']; ?></td>
                                   <td><?php echo $row['status']; ?></td>
                                   <td><?php echo '<img src="../galeri/'.$row['gambar'].' "class="rounded" width="100px"> ';?></td>
                            
                                   
                                   

                                   <td><a href="hapus_pengajuansementara.php?id=<?php echo $row['no_service']; ?>" class="btn btn-danger">Hapus</a></td>

                               </tr>
                               <?php $no++; endwhile; } else { echo "<tr><td>Tidak ada pengajuan barang </td></tr>"; } ?>
              

                  
                  </td>
                   <td>
                    
<a target="_blank" href="cetakpengajuan.php?&tgl=<?= $row['tgl_pengajuan']; ?>&unit=<?= $row['unit']; ?>"><span data-placement='top' data-toggle='tooltip' title='Cetak'>
                    <button class="btn btn-success"><i class="fa fa-print"></i></button></span></a>  
                   </tr>    

                   <?php $no++; endwhile; }else {echo "<tr><td colspan=9>Tidak ada permintaan material teknik.</td></tr>";} ?>

                 </tbody>
               </table>
             </div>                  
           </div>
         </div>
       </div>
     </div>


   </section>

