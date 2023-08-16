<?php
include "../fungsi/koneksi.php";
include "../fungsi/fungsi.php";


$query = "SELECT * FROM stokbarang";
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
                  agama: "required"
                },
             
        messages: {
                 txtsearch: {
                    required: ''
                },
                  agama: {
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
   $id_jenis = $_POST['id_jenis']; 
      
   $querycek = "SELECT * FROM stokbarang WHERE id_jenis='$id_jenis'";
    $hasil = mysqli_query($koneksi,$querycek);
    $data = mysqli_num_rows($hasil);

   
    } 
    ?>

    <script>
    function print_d(){
      window.open("cetak_barang.php","_blank");
    }
</script>


<main>
     <div class="row">
          <div class="col-lg-12">
            <h1>DATA &raquo;<small>STOK BARANG</small></div></h1>
           <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="index.php?p=laporanadmin" >Data Barang</a></li>
    <li class="breadcrumb-item">DATA STOK BARANG</a></li>
    

  </ol>
              
          <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" target="_self">
            
          </form>
        </div>
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-sm-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="text-center">LAPORAN by JENIS</h3>
        </div>                
        <div class="box-body">
          <div class="row">
            <div class="col-md-2">
                       <form action="cetak_barang.php" method="post" target="_blank">
              <body>

<form method="POST" action="" id="form"> 

<select class="form-control" name="id_jenis" required>
                <option value="">-PILIH BERDASARKAN JENIS-</option>
                <option value="1">MATERIAL</option>
                <option value="2">ASSET</option>
                <option value="3">OBAT</option>
                <option value="4">PAKAN</option>
                <option value="5">AYAM</option>
                
              </select>
					
            </div>

            <div class="col-md-2 pull-right">


                <input type="submit" class="btn btn-success" value="Cetak" name="submit" /> 
              
            </div>
            <br><br>
          </div>                        
          <div class="table-responsive">
            <table class="table text-center" id="material">
             <thead  > 
                <tr>
                  <th  width="50px">No</th>
                  <th>Jenis Barang</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Category</th>
                  <th>Satuan</th>
                  <th>Masuk</th>
                  <th>Kelua</th>
                  <th>Sisa</th>
                


                </tr>
              </thead>
              <tbody>
              <?php 
              $no = 1;
                  while ($data = mysqli_fetch_assoc($hasil)):

               ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php
                               if ($data['id_jenis'] == 1){
                                echo '<span class=text>MATERIAL</span>';
                            } elseif ($data['id_jenis'] == 2) {
                                echo '<span class=text>ASSET</span>';
                            } elseif ($data['id_jenis'] == 3) {
                                echo '<span class=text>OBAT</span>';
                            } elseif ($data['id_jenis'] == 4) {
                                echo '<span class=text>PAKAN</span>';
                            } elseif ($data['id_jenis'] == 5) {
                                echo '<span class=text>AYAM</span>';
                            } 
                            ?> </td></td>
                    <td><?php echo $data['kode_brg']; ?></td>
                    <td><?php echo $data['nama_brg']; ?></td>
                    <td><?php echo $data['category']; ?></td>    
                    <td><?php echo $data['satuan']; ?></td> 
                    <td><?php echo $data['stok']; ?></td>
                    <td><?php echo $data['keluar']; ?></td>
                    <td><?php echo $data['sisa']; ?></td>

                                                                                                  
                   
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