    <?php

 include "../fungsi/koneksi.php";
 
 $query = "SELECT * FROM produksi WHERE kode ";
    $hasil = mysqli_query($koneksi,$query);  
    ?>

<head>
  <title>Laporan Data Produksi Telur</title>
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
        
        <H4><b>LAPORAN DATA PRODUKSI TELUR</b></H4>
             <table>
  <tr>
    <td align="left"><b>Jenis Transaksi</b></td>
    <td ><b>:</b></td>
    <td width="600px" align="left"><b>REPORT PRODUKSI TELUR</b></td>
    
  </tr>
  
  <tr>
    <td align="left"><b>Nama Perusahaan</b></td>
    <td><b>:</b></td>
    <td width="600px" align="left"><b>CHAROEN POKHPAND JAYA FARM BANJARMASIN 1</b></td>
    
  </tr>

  <tr>
    <td align="left"><b>Lokasi</b></td>
    <td><b>:</b></td>
    <td width="600px" align="left"><b>(BANJARMASIN 1)JALAN DATU INSAD NO 1 RT 004/RW 001</b></td>
    
  
  </tr>
<tr>
    <td align="left"><b></b></td>
    <td><b></b></td>
    <td width="600px" align="left"><b>Ds Sambangan, Kec Bati-Bati Kab Tanah Laut</b></td>
    
  </tr>
 
    
        <table border="1" align="center" style="border-collapse:collapse;" width="100%">
       <tr>
         <td width="50" align="center"><b>No</b></td>
              <th>Kode Telur</th>
                  <th>Kandang</th>
                  <th>Jumlah</th>
                  <th>Grade A</th>
                  <th>Grade B</th>
                  <th>Komersil</th>
            </tr>
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
       <h4>Tanah Laut, <script type='text/javascript'>
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
               


