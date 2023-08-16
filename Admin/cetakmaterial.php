<?php ob_start(); ?>
<!-- Setting CSS bagian header/ kop -->
<style type="text/css">
  table.page_header {width: 1020px; border: none; background-color: #DDDDFF; border-bottom: solid 1mm #AAAADD; padding: 2mm }
  table.page_footer {width: 1020px; border: none; background-color: #DDDDFF; border-top: solid 1mm #AAAADD; padding: 2mm}
  h1 {color: #000033}
  h2 {color: #000055}
  h3 {color: #000077}
</style>
<!-- Setting Margin header/ kop -->
<!-- Setting CSS Tabel data yang akan ditampilkan -->
<style type="text/css">
  .tabel2 {
    border-collapse: collapse;
    margin-left: 5px;
  }
  .tabel2 th, .tabel2 th {
    padding: 5px 5px;
    border: 1px solid #000;
  }

  div.kanan {
   width:300px;
   float:right;
   margin-left:210px;
   margin-top:-140px;
 }

 div.kiri {
   width:300px;
   float:left;
   margin-left:30px;
   display:inline;
 }

</style>
<table>
<?php 

  


include "../fungsi/koneksi.php";
include "../fungsi/fungsi.php";

 $query = "SELECT * FROM stokbarang WHERE stokbarang.id_jenis ='1' ";
    $hasil = mysqli_query($koneksi,$query);
?>
  <head>
  <title>LAPORAN DATA STOK BARANG</title>
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
        <hr class="garis">
        
        <H4><b>LAPORAN DATA STOK BARANG</b></H4>
        <hr>
             <table>
  <tr>
    <th align="left"><b>Jenis Transaksi</b></th>
    <th ><b>:</b></th>
    <th width="600px" align="left"><b>REPORT STOK BARANG</b></th>
    
  </tr>
  
  <tr>
    <th align="left"><b>Nama Perusahaan</b></th>
    <th><b>:</b></th>
    <th width="600px" align="left"><b>CHAROEN POKHPAND JAYA FARM BANJARMASIN 1</b></th>
    
  </tr>

  <tr>
    <th align="left"><b>Lokasi</b></th>
    <th><b>:</b></th>
    <th width="600px" align="left"><b>(BANJARMASIN 1)JALAN DATU INSAD NO 1 RT 004/RW 001</b></th>
    
  
  </tr>
<tr>
    <th align="left"><b></b></th>
    <th><b></b></th>
    <th width="600px" align="left"><b>Ds Sambangan, Kec Bati-Bati Kab Tanah Laut</b></th>
    
  </tr>
  </table>

  <?php 

  $query2 = mysqli_query($koneksi, "SELECT * FROM stokbarang  ");
  if ($query2){                
    $data = mysqli_fetch_assoc($query2);

  } else {
    echo 'gagal';
  }
  ?>
  <br>


<table border="1" align="center" style="border-collapse:collapse;" width="100%">
       <tr>
         <td width="50" align="center"><b>No</b></td>
              <th>Kode Barang</th>
              <th>Nama Barang</th>
              <th>Category</th>
              <th>Satuan</th>
              <th>Masuk</th>
              <th>Keluar</th>
              <th>Sisa</th>
   

            </tr>
      </thead>
      <tbody>

      <?php

      $sql = mysqli_query($koneksi, "SELECT * FROM stokbarang  ");  
      $i   = 1;
      while($data=mysqli_fetch_array($sql))
      {
        ?>
        <tr>
          <th style="text-align: center; width=15px; font-size: 12px;"><?php echo $i; ?></th>
          <th style="text-align: center; width=50px; font-size: 12px;"><?php echo $data['kode_brg']; ?></th>
          <th style="text-align: left; width=150px; font-size: 12px;"><?php echo $data['nama_brg']; ?></th>
          <th style="text-align: center; width=50px; font-size: 12px;"><?php echo $data['category']; ?></th> 
          <th style="text-align: center; width=30px; font-size: 12px;"><?php echo $data['satuan']; ?></th>
          <th style="text-align: center; width=30px; font-size: 12px;"><?php echo $data['stok']; ?></th>
          <th style="text-align: center; width=30px; font-size: 12px;"><?php echo $data['keluar']; ?></th>
          <th style="text-align: center; width=70px; font-size: 12px;"><?php echo $data['sisa']; ?></th>

        </tr>
        <?php
        $i++;
      }
      ?>
    </tbody>
  </table>
 </body>
</h4>
</div>
</body>
<br>
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
       <h4>Banjarbaru, <script type='text/javascript'>
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
          <h4 class="tulisan">MANAGER</h4>
          <h4><u><?php echo $data['username']; ?></u></h4>
          
      </div>

              <?php 
                  endwhile;
               ?>
               


