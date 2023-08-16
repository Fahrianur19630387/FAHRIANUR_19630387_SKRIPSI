<?php
include "../fungsi/koneksi.php";
include "../fungsi/fungsi.php";


$query = "SELECT * FROM stokbarang";
    $hasil = mysqli_query($koneksi,$query);


?>
<html> 
<head> 
<title>Laporan Data Penduduk Berdasarkan id_jenis</title>
  <link href="../css/styles_laporan_kelurahan.css" type="text/css" rel="stylesheet" />
<script src="../vendor/jquery/jquery.min.js"></script> <!-- Load library jquery -->
<script type="text/javascript">
        $(document).ready(function() {
            $("#form").validate({
                rules: {
                  txtsearch: "required",
                  id_jenis: "required"
                },
             
        messages: {
                 txtsearch: {
                    required: ''
                },
                  id_jenis: {
                    required: ''
                },
        },
                success: function(label) {
            label.text('').addClass('valid');
         }
            });
        });
    </script></head> 



<head>
  <title>Laporan Data Penduduk</title>
  <link href="css/styles_laporan.css" type="text/css" rel="stylesheet" />
<script>
    window.load = print_d();
    function print_d(){
        window.print();
    }
  window.onfocus=function(){ 
    window.close();
  }
</script>
</head>


<form method="POST" action="" id="form"> 



<?php 
  if (isset($_POST['submit'])) { 
   $id_jenis = $_POST['id_jenis']; 
      

   $querycek = "SELECT * FROM stokbarang WHERE id_jenis='$id_jenis'";
    $hasil = mysqli_query($koneksi,$querycek);
    $datacek = mysqli_num_rows($hasil);

   
    } 
    ?>

    
              
          <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" target="_self">
            
          </form>
        </div>

                     </style>
<head>
  <title>Laporan Data Pengajuan Barang</title>
  <link href="../css/styles_laporan.css" type="text/css" rel="stylesheet" />
<script>
    window.load = print_d();
    function print_d(){
        window.print();
    }
  window.onfocus=function(){ 
    window.close();
  }
</script>
</head>
<body>  
         
                      <left><img src="../gambar/CPF.png" width="110px" height="110" ></left>
                      <br
       <div class="judul">

            <h4><b>PT CHAROEN POKPHAND JAYA FARM
            <br>
           BANJARMASIN 1
              <br></b>
            <h6>Jalan Datu Insad Rt. 04 Rw. 01 Desa Sambangan Kecamatan Bati-Bati
            <br>Kabupaten Tanah Laut Provinsi Kalimantan Selatan Kode Pos 70852 </h6>
            <br>
            <br>

            
            
        </div>

            
        </div>
        <hr class="garis">
        <H4>LAPORAN DATA BARANG BERDASARKAN JENIS BARANG</H4>
        <h>
        <table border="1" align="center" style="border-collapse:collapse;" width="100%">
       <tr>
         <th  width="50px">No</th>
                  <th>Jenis Barang</th>
                  <th>Nama Barang</th>
                  <th>Category</th>
                  <th>Satuan</th>
                  <th>Masuk</th>
                  <th>Kelua</th>
                  <th>Sisa</th>
              
            </tr>
         <?php 
              $no = 1;
                  while ($datacek = mysqli_fetch_assoc($hasil)):

               ?>
        <tr>
          <td><?php echo $no++; ?></td>
                    <td><?php
                               if ($datacek['id_jenis'] == 1){
                                echo '<span class=text>MATERIAL</span>';
                            } elseif ($datacek['id_jenis'] == 2) {
                                echo '<span class=text>ASSET</span>';
                            } elseif ($datacek['id_jenis'] == 3) {
                                echo '<span class=text>OBAT</span>';
                            } elseif ($datacek['id_jenis'] == 4) {
                                echo '<span class=text>PAKAN</span>';
                            } elseif ($datacek['id_jenis'] == 5) {
                                echo '<span class=text>AYAM</span>';
                            } 
                            ?> </td></td>
                    
                    <td><?php echo $datacek['nama_brg']; ?></td>
                    <td><?php echo $datacek['category']; ?></td>    
                    <td><?php echo $datacek['satuan']; ?></td> 
                    <td><?php echo $datacek['stok']; ?></td>
                    <td><?php echo $datacek['keluar']; ?></td>
                    <td><?php echo $datacek['sisa']; ?></td>
              
            </tr>
        <?php 
            endwhile;
         ?>
      </table>
      
</body>

   <br>                   
<?php 
 
 include "../fungsi/koneksi.php";

  $query = "SELECT * FROM user WHERE user.level ='Manager' ";
    $hasil = mysqli_query($koneksi,$query);

    
  
?>
              <?php 
              $no = 1;
                  while ($data = mysqli_fetch_assoc($hasil)):

               ?>
 

               <div class="ttd">
      <!--
      var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
      var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
      var date = new Date();
      var day = date.getDate();
      var month = date.getMonth();
      var thisDay = date.getDay(),
          thisDay = myDays[thisDay];
      var yy = date.getYear();
      var year = (yy < 1000) ? yy + 1900 : yy;
      document.write(thisDay + ' ' + day + ' ' + months[month] + ' ' + year);
      //-->
    </script></h4>
    <br>
          
      </div>
      <style>
  strong{
    float: right;
  }
  .judul{
    margin-bottom: 10px;
  } 
  table{
        margin-top: 40px;
        position: center;
    }
  
</style>    

      <table>

  <tr>
    
    <td align="left"><b><h4 class="tulisan">Diterima Oleh,</h4></b></td>
    <td ><b></b></td>
    <td width="600px" align="left"><b></b></td>
    <td align="left"><b><h4 class="tulisan">Dibuat Oleh,</h4></b></td>
    <td><b></b></td>
    <td width="600px" align="left"><b></b></td>
    <td align="left"><b><h4 class="tulisan">Dibuat Oleh,</h4></b></td>
    <td><b></b></td>
    <td align="left"><b><h4><u></u></h4></b> </td>
  </tr>
  <tr>
    <td align="left"><b><h4>(_____________)</h4></b></td>
    <td><b></b></td>
    <td width="600px" align="left"><b></b></td>
    <td align="left"><b><h4><u><?php echo $data['username']; ?></u></h4></b></td>
    <td><b></b></td>
    <td align="left"><b></b> </td>
    <td align="left"><b><h4><u><?php echo $data['username']; ?></u></h4></b></td>
    <td><b></b></td>
    <td align="left"><b></b> </td>
  </tr>
  <tr>
    <td align="left"><b><h4>Nama Jelas</h4></b></td>
    <td><b></b></td>
    <td width="600px" align="left"><b></b></td>
    <td align="left"><b><h4><?php echo $data['jabatan']; ?></h4></b></td>
    <td><b></b></td>
    <td width="600px" align="left"><b></b></td>
    <td align="left"><b><h4><?php echo $data['jabatan']; ?></h4></b></td>
    <td align="left"><b></b> </td>
  </tr>
  
  
  

              <?php 
                  endwhile;
               ?>
        </div>    
    </div>

</div>
</body>
</html>


