
<?php  
include "../fungsi/koneksi.php";
include "../fungsi/fungsi.php";

if (isset($_GET['aksi']) && isset($_GET['tgl'])) {
        //die($id = $_GET['id']);
  $tgl = $_GET['tgl'];
  echo $tgl;


}
if(isset($_GET['aksi']) && isset($_GET['unit'])) {
  $aksi = $_GET['aksi'];
  $unit = $_GET['unit'];
  if ($aksi == 'hapus') {
    $query2 = mysqli_query($koneksi, "DELETE FROM permintaan WHERE unit='$unit' ");
    if ($query2) {
      header("location:?p=datapengeluaran&tgl=".$tgl);
    } else {
      echo 'gagal';
    }
  }
}


$query = mysqli_query($koneksi, "SELECT distinct(unit), jabatan, tgl_permintaan FROM permintaan WHERE  status=1"); 



?>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-sm-12">
     <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="text-center">Data Permintaan Barang Keluar</h3>
      </div>    
      <div class="box-body"> 
        <div class="table-responsive">
          <table class="table table-bordered table-hover text-center" id="datapesanan">
            <thead  > 
              <tr>
                <th>No</th> 
                <th>Tanggal Permintaan</th>
                <th>Nama</th>
                <th>Intansi</th>
                <th>Detail</th>   
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
                   <td> <?= tanggal_indo($row['tgl_permintaan']); ?> </td>                                         
                   <td> <?= $row['unit']; ?> </td>   
                   <td> <?= $row['jabatan']; ?> </td> 

                   <td>
                    <a href="?p=detil_datapengeluaran&unit=<?= $row['unit'];?>&tgl=<?= $row['tgl_permintaan']; ?>"><span data-placement='top' data-toggle='tooltip' title='Detail Permintaan'><button    class="btn btn-info">Detail Barang</button></span></a>     

                  </td> 
                  <td>                                            

                  </td>                   
                </tr>
                <?php $no++; endwhile; }else {echo "<tr><td colspan=9>Belum ada permintaan disetujui</td></tr>" . mysqli_error($koneksi);} ?>
              </tbody>
            </table>
          </div>                  
        </div>
      </div>
    </div>
  </div>



</section>