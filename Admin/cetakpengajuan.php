<?php 

include "../fungsi/koneksi.php";
include "../fungsi/fungsi.php";

ob_start(); 
$id  = isset($_GET['id']) ? $_GET['id'] : false;


$unit = $_GET['unit'];
$tgl= $_GET['tgl'];

?>
<!-- Setting CSS bagian header/ kop -->
<style type="text/css">
  table.page_header {width: 1020px; border: none; background-color: #DDDDFF; border-bottom: solid 1mm #AAAADD; padding: 2mm }
  table.page_footer {width: 1020px; border: none; background-color: #DDDDFF; border-top: solid 1mm #AAAADD; padding: 2mm}
  

</style>
<!-- Setting Margin header/ kop -->
<!-- Setting CSS Tabel data yang akan ditampilkan -->
<style type="text/css">
 .tabel2 {
  border-collapse: collapse;
  margin-left: 5px;
}
.tabel2 th, .tabel2 td {
  padding: 5px 5px;
  border: 1px solid #000;
}
div.kanan {
 width:300px;
 float:right;
 margin-left:210px;
 margin-top:-235px;
}

div.kiri {
 width:300px;
 float:left;
 margin-left:30px;
 display:inline;
}

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

            <h1><b>PT. CHAROEN POKPHAND JAYA FARM
            <br>
           BANJARMASIN 1
              <br></b>
              
              
            <h3>Jln. Datu Insad Rt. 04 Rw. 01 Desa Sambangan Kec.Bati-Bati
            Kab. Tanah Laut Provinsi Kalimantan Selatan Kode Pos 70852 </h3>
           

            
            
        </div>
        <hr class="garis">
        
        <H4><b>LAPORAN DATA PENGAJUAN BARANG</b></H4>
             <table>
  <tr>
    <td align="left"><b>Jenis Transaksi</b></td>
    <td ><b>:</b></td>
    <td width="600px" align="left"><b>REPORT PENGAJUAN BARANG</b></td>
    
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
 

    <p style="color: black; text-align: left;">Permintaan Pembelian Barang  <br>Pada Tanggal : <b> <?=  tanggal_indo($tgl); ?> </b></p>
    <table border="1" align="center" style="border-collapse:collapse;" width="100%">
       <tr>
         <td width="50" align="center"><b>No</b></td>
              <th width="100">Kode Barang</th>        				
               <th>Nama Barang</th>
               <th width="50">Satuan</th>
               <th width="50">Jumlah</th> 
               <th width="50">User</th> 

            </tr>
    
      <tbody>
        <?php


        $query = mysqli_query($koneksi, "SELECT  pengajuan.kode_brg, nama_brg, pengajuan.jumlah, pengajuan.satuan, pengajuan.unit, pengajuan.category, tgl_pengajuan FROM pengajuan INNER JOIN stokbarang ON pengajuan.kode_brg = stokbarang.kode_brg  WHERE tgl_pengajuan='$tgl' "); 

        $i   = 1; 
        while($data=mysqli_fetch_array($query))
        {
          ?>

          <tr>
            <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td>             
            <td style="text-align: center; font-size: 12px;"><?php echo $data['kode_brg']; ?></td>
            <td style="text-align: left; font-size: 12px;"><?php echo $data['nama_brg']; ?></td>
            <td style="text-align: center; font-size: 12px;"><?php echo $data['satuan']; ?></td>
            <td style="text-align: center; font-size: 12px;"><?php echo $data['jumlah']; ?></td>
            <td style="text-align: center; font-size: 12px;"><?php echo $data['unit']; ?></td>


          </tr>
          <?php
          $i++;

        }
        ?>
      </tbody>
      <?php 

      $query2 = mysqli_query($koneksi, "SELECT jumlah, category FROM pengajuan WHERE unit='$unit' AND tgl_pengajuan='$tgl' ");  
      $data2 = mysqli_fetch_assoc($query2);

      ?>
    </table>
  </div>
  <br>



<?php 
 
 include "../fungsi/koneksi.php";

  $query = "SELECT * FROM user WHERE user.level ='Admin' ";
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
    
    <td align="left"><b><h4 class="tulisan">Disetujui Oleh,</h4></b></td>
    <td ><b></b></td>
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
  </tr>
  <tr>
    <td align="left"><b><h4>Nama Jelas</h4></b></td>
    <td><b></b></td>
    <td width="600px" align="left"><b></b></td>
    <td align="left"><b><h4><?php echo $data['jabatan']; ?></h4></b></td>
    <td><b></b></td>
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

