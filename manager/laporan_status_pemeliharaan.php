<?php
include "../fungsi/koneksi.php";
include "../fungsi/fungsi.php";


$query = "SELECT * FROM pemeliharaan";
    $hasil = mysqli_query($koneksi,$query);


?>
<html> 
<head> 

<script src="../vendor/jquery/jquery.min.js"></script> <!-- Load library jquery -->
<script type="text/javascript">
        $(document).ready(function() {
            $("#form").validate({
                rules: {
                  txtsearch: "required",
                  status: "required"
                },
             
        messages: {
                 txtsearch: {
                    required: ''
                },
                  status: {
                    required: ''
                },
        },
                success: function(label) {
            label.text('').addClass('valid');
         }
            });
        });
    </script></head> 



<style>
  form{
    float: right;
  }
  body{
      font-family: roboto;
    }
</style>

<main>
      <div class="card">
        <div class="card-header form-inline">
          
          </div>

<?php 
  if (isset($_POST['submit'])) { 
   $status = $_POST['status']; 
      
   $querycek = "SELECT * FROM pemeliharaan WHERE status='$status'";
    $hasil = mysqli_query($koneksi,$querycek);
    $datacek = mysqli_num_rows($hasil);

   
    } 
    ?>

    <script>
    function print_d(){
      window.open("cetak_status_pemeliharaan.php","_blank");
    }
</script>
              
          <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" target="_self">
            
          </form>
        </div>
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-sm-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="text-center">LAPORAN STATUS PEMELIHARAAN</h3>
        </div>                
        <div class="box-body">
          <div class="row">
            <div class="col-md-2">
                       <form action="cetak_status_pemeliharaan.php" method="post" target="_blank">
              <body>

<form method="POST" action="" id="form"> 

<select class="form-control" name="status" required>
                <option value="">-Pilih ID JENIS-</option>
                <option value="0">MENUNGGU PERSETUJUAN</option>
                <option value="1">DISETUJUI</option>
                <option value="2">TIDAK DISETUJUI</option>
                
                
              </select>
					
            </div>

            <div class="col-md-2 pull-right">
                <input type="submit" class="btn btn-primary btn-sm" value="Cetak" name="submit"/> 
              
            </div>
            <br><br>
          </div>                        
          <div class="table-responsive">
            <table class="table text-center" id="material">
             <thead  > 
                <tr>
                  <th  width="50px">No</th>
                  <th>No Service</th>
              <th>Tanggal Permintaan</th>
              <th>Nama </th>
              <th>Nama Barang</th>
              <th>Catatan</th>
              <th>Jumlah</th>
              <th>Status</th>
                


                </tr>
              </thead>
              <tbody>
              <?php 
              $no = 1;
                  while ($data = mysqli_fetch_assoc($hasil)):

               ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['status']; ?></td>
                    <td><?php echo date('d/m/Y', strtotime($data['tgl_pemeliharaan']));  ?></td>
                    <td><?php echo $data['unit']; ?></td>    
                    <td><?php echo $data['nama_brg']; ?></td> 
                    <td><?php echo $data['catatan']; ?></td>
                    <td><?php echo $data['jumlah']; ?></td>
                    <td><?php
                               if ($data['status'] == 0){
                                echo '<span class=text-warning>Belum Disetujui</span>';
                            } elseif ($data['status'] == 1) {
                                echo '<span class=text-primary>Telah Disetujui</span>';
                            } else {
                                echo '<span class=text-danger>Tidak Disetujui</span>';
                            }
                            ?> </td>

                                                                                                  
                   
                  </tr>
              <?php 
                  endwhile;
               ?>
              </tbody>
            </table>
          </div>
        </div>    

</main>



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