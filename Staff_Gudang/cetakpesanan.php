<?php 

include "../fungsi/koneksi.php";
include "../fungsi/fungsi.php";

ob_start(); 
$id  = isset($_GET['id']) ? $_GET['id'] : false;


$unit = $_GET['unit'];
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
  margin-left: 80px;
}
.tabel2 th, .tabel2 td {
  padding: 5px 5px;
  border: 1px solid #000;
}
.tabelatas{

  margin-left: 10 px;
}
p{

  margin-left: 80px;
}

div.kanan {
 width:300px;
 float:right;
 margin-left:150px;
 margin-top:-236px;
}

div.kiri {
 width:300px;
 float:left;
 margin-left:-10px;
 display:inline;
}
div.tengah {
 width:300px;
 float:left;
 margin-left:195px;
 margin-top:2;
 display:inline;
}
</style>
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
         <H4><b>LAPORAN BUKTI PERMINTAAN BARANG (BPP)</b></H4>
  <hr>
 
  
  <div class="isi" style="margin: 0 auto;">

   <table class="tabelatas">
    <tr>
      <td style="text-align: left; width:100px;  "><b>Nama </b></td>  
      <td style="text-align: left; "><b>: <?= $unit; ?></b></td>           
    </tr>
    <tr>
      <td style="text-align: left; width:100px;  "><b>Pada tanggal </b></td>   
      <td style="text-align: left; "><b>: <?=  tanggal_indo($tgl); ?></b></td>       
    </tr>

  </table>
  <table border="1" align="center" style="border-collapse:collapse;" width="100%">
       <tr>
         <td width="50" align="center"><b>No</b></td>
              <th width="100">Kode Barang</th>        				
               <th width="300">Nama Barang</th>
               <th width="50">Satuan</th>
               <th width="50">Jumlah</th> 
               
               <th width="50">Nama Karyawan</th> 
               <th width="200">Tujuan</th>
               

            </tr>
    </thead>
    <tbody>
      <?php

$query = mysqli_query($koneksi, "SELECT permintaan.kode_brg, unit, nama_brg, jumlah, satuan, tujuan, tgl_permintaan FROM permintaan INNER JOIN stokbarang ON permintaan.kode_brg = stokbarang.kode_brg  WHERE unit='$unit' AND  status=1 AND tgl_permintaan='$tgl' "); 

    
      $i   = 1;
      $total = 0;
      while($data=mysqli_fetch_array($query))
      {
        ?>
        <tr>
          <th style="text-align: center; font-size: 12px;"><?php echo $i; ?></th>             
          <th style="text-align: center; font-size: 12px;"><?php echo $data['kode_brg']; ?></th>
          <th style="text-align: left; font-size: 12px;"><?php echo $data['nama_brg']; ?></th>
          <th style="text-align: center; font-size: 12px;"><?php echo $data['satuan']; ?></th>  
          <th style="text-align: center; font-size: 12px;"><?php echo $data['jumlah']; ?></th>  
    
          <th style="text-align: center; font-size: 12px;"><?php echo $data['unit']; ?></th>
          <th style="text-align: center; font-size: 12px;"><?php echo $data['tujuan']; ?></th>                             
        </tr>
        <?php
        $i++;
        $total=$total+$data['jumlah'];
      }
      ?>
    </tbody>

  </table>

   <table border="1" align="center" style="border-collapse:collapse;" width="100%">
       <tr>
         
              <th>Total Barang</th>        				
                <td style="text-align: center; width=80px;"><b><?= $total = $total; ?></b></td> 
               

            </tr>
 
  </table>


</div>



<?php 
 
 include "../fungsi/koneksi.php";

  $query = "SELECT * FROM user WHERE user.level ='Staff_Gudang' ";
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
    <td align="left"><b><h4><u></u></h4></b> </td>
  </tr>
  <tr>
    <td align="left"><b><h4><u><?php echo $data['username']; ?></u></h4></b></td>
    <td><b></b></td>
    <td width="600px" align="left"><b></b></td>
    <td align="left"><b><h4><u><?php echo $data['username']; ?></u></h4></b></td>
    <td><b></b></td>
    <td align="left"><b></b> </td>
  </tr>
  <tr>
    <td align="left"><b><h4>Nama Karyawan</h4></b></td>
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

