<?php 

  


include "../fungsi/koneksi.php";
include "../fungsi/fungsi.php";

 $query = "SELECT * FROM produksi WHERE kode ";
    $hasil = mysqli_query($koneksi,$query);
?>
<script>
    function print_d(){
      window.open("cetak_produksi_telur","_blank");
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
    <div class="panel-heading">DATA PRODUKSI TELUR<a class="fa fa-print pull-right" href="cetak_produksi_telur.php" 
    style="text-decoration:none"></a></div>
    <div class="panel-body">

        <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped" id="datatables">
            <thead>
            <tr class="info">
              <th>No</th>
                  <th>Kode Telur</th>
                  <th>Kandang</th>
                  <th>Jumlah</th>
                  <th>Grade A</th>
                  <th>Grade B</th>
                  <th>Komersil</th>
                  
                  
            </tr>
            </thead>
            <tbody> 
            <?php 
              $no = 1;
                  while ($row = mysqli_fetch_assoc($hasil)):

               ?>
            <tr>
              <td><?php echo $no++; ?></td>
                <td> <?= $row['kode']; ?> </td>  
                <td> <?= $row['kandang']; ?> </td>          					
                <td> <?= $row['jumlah']; ?> </td>
                <td> <?= $row['grade_a']; ?> </td>
                <td> <?= $row['grade_b']; ?> </td>
                <td> <?= $row['komersil']; ?> </td>                                         
                
                
              

              
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