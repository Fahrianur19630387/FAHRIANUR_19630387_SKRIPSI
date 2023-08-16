


<?php
  include "../fungsi/koneksi.php";

$produk = mysqli_query($koneksi,"SELECT distinct nama_brg from stokbarang WHERE id_jenis=4");  
while($row = mysqli_fetch_array($produk)){
  $nama_brg[] = $row['nama_brg'];
  


  $query = mysqli_query($koneksi,"select sum(keluar) as keluar from stokbarang where nama_brg='".$row['nama_brg']."'");
  $row = $query->fetch_array();
  $keluar[] = $row['keluar'];
}
?>







<head>
  <title>Laporan Grafik Pakan</title>
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
        
        <H4><b>LAPORAN GRAFIK DATA PRODUKSI PAKAN</b></H4>
             <table>
  <tr>
    <td align="left"><b>Jenis Transaksi</b></td>
    <td ><b>:</b></td>
    <td width="600px" align="left"><b>REPORT PRODUKSI PAKAN</b></td>
    
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
  <br>
 
   <div class="box-body"> 

        <div class="table-responsive">
          <table class="table table-bordered table-hover text-center" id="datapesanan">
            <thead  > 
              <br>
              <br>

               <!DOCTYPE html>
<html>
<head>
  <title>Membuat Grafik Pakan</title>
  <script type="text/javascript" src="../vendor/chart.js/Chart.js"></script>
</head>
<body>
  <label><h2>GRAFIK PAKAN BERDASARKAN PEMAKAIAN</h2></label>
  <div style="width: 800px;height: 800px">
    <canvas id="myChart"></canvas>
  </div>


  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: <?php echo json_encode($nama_brg); ?>,
        datasets: [{
          label: 'Stok Vakan',
          data: <?php echo json_encode($keluar); ?>,
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgba(255,99,132,1)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>
</body>
</html>

             
              

