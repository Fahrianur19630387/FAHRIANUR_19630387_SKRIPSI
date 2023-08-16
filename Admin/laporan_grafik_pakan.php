
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




<script>
    function print_d(){
      window.open("cetak_laporan_grafik_pakan.php","_blank");
    }
</script>
<style>
  th{text-align: center;}
</style>

<style>
  img{
    width: 130px;
  }
    form{
    float: right;
  } 
  body{
      font-family: roboto;
    }
</style>

<main>
     <div class="row">
          <div class="col-lg-12">
            <h1>GRAFIK &raquo;<small>GRAFIK PAKAN</small> </div></h1>
           <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="index.php?p=laporan_grafik_pakan" >Grafik Pakan</a></li>
    <li class="breadcrumb-item">Grafik Pakan</a></li>
    <li class="breadcrumb-item"> <a target="_blank" href="cetak_laporan_grafik_pakan.php" class="btn btn-success"><i class="fa fa-print"></i> Cetak Grafik Pakan</a></a></li>

  </ol>
  
       
</div>
      
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

             
              

