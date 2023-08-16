<?php 

  


include "../fungsi/koneksi.php";
include "../fungsi/fungsi.php";

 $query = "SELECT * FROM stokbarang WHERE stokbarang.id_jenis ='5' ";
    $hasil = mysqli_query($koneksi,$query);
?>
<script>
    function print_d(){
      window.open("cetak_ayam.php","_blank");
    }
</script>
<style>
  th{text-align: center;}
</style>




<br>

<!-- TABEL DATA PNS -->
<div class="row">
      <div class="col-lg-12">


    <div class="panel panel-default">
    <div class="panel-heading">DATA STOCK AYAM<a class="fa fa-print pull-right" href="cetak_ayam.php" 
    style="text-decoration:none"></a></div>
    <div class="panel-body">

        <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped" id="datatables">
            <thead>
            <tr class="info">
              <th>No</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Categori</th>
                  <th>Satuan</th>
                  <th>Stok</th>
                  <th>Keluar</th>
                  <th>Sisa</th>
                  
            </tr>
            </thead>
            <tbody> 
            <?php 
              $no = 1;
                  while ($row = mysqli_fetch_assoc($hasil)):

               ?>
            <tr>
              <td><?php echo $no++; ?></td>
                    <td> <?= $row['kode_brg']; ?> </td>          					
                <td style="text-align: left;"> <?= $row['nama_brg']; ?> </td>
                <td> <?= $row['category']; ?> </td>
                <td> <?= $row['satuan']; ?> </td>
                <td> <?= $row['stok']; ?> </td>
                <td> <?= $row['keluar']; ?> </td>                                         
                <td> <?= $row['sisa']; ?> </td>
                
              

              
            </tr>
             <?php 
                  endwhile;
               ?>
            <tbody> 
          </table>
        </div>

      </div> <!-- panelbody -->
      <div class="panel-footer">
      </div> <!-- panelinfo -->
      </div>

          <!-- <a href="?page=tambahpns" class="btn btn-primary">Tambah</a> -->

      </div>
    </div>