
<?php
  include "../fungsi/koneksi.php";

$produk = mysqli_query($koneksi,"SELECT distinct kandang from produksi "); 
while($row = mysqli_fetch_array($produk)){
  $kandang[] = $row['kandang'];
  


  $query = mysqli_query($koneksi,"select grade_a, grade_b from produksi where kandang='".$row['kandang']."'");
  $row = $query->fetch_array();
  $grade_a[] = $row['grade_a'];
  $grade_b[] = $row['grade_b'];
 
}
?>




<script>
    function print_d(){
      window.open("cetak_laporan_grafik_produksi.php","_blank");
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
      <br>
      
          <div class="col-lg-12">
            <h1>GRAFIK &raquo;<small>GRAFIK PRODUKSI</small> </div></h1>
           <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="index.php?p=laporan_grafik_produksi" >Grafik Produksi</a></li>
    <li class="breadcrumb-item">Grafik Produksi</a></li>
     <li class="breadcrumb-item"> <a target="_blank" href="cetak_laporan_grafik_produksi.php" class="btn btn-success"><i class="fa fa-print"></i> Cetak Grafik Produksi</a></a></li>
    

  </ol>
  
       
</div>
      
         <!DOCTYPE html>
<html>
<head>
  <title>Membuat Grafik Menggunakan Chart JS</title>
  <script type="text/javascript" src="../vendor/chart.js/Chart.js"></script>
</head>
<body>
  <label><h2>GRAFIK PRODUKSI BERDASARKAN GRADE TELUR </h2> </label>
  <div style="width: 800px;height: 800px">
    <canvas id="myChart"></canvas>
  </div>


  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: <?php echo json_encode($kandang); ?>,
        datasets: [{
          label: ' GRADE A',
          data: <?php echo json_encode($grade_a); ?>,
          backgroundColor: '#7Fffd4',
          borderColor: 'rgba(255,99,132,1)',
          borderWidth: 1

         
        },
        {
          label: 'GRADE B',
          data: <?php echo json_encode($grade_b); ?>,
          backgroundColor: 'rgba(224, 88, 132, 0.2)',
          borderColor: 'rgba(255,99,132,1)',
          borderWidth: 1
        }
        ]
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

             
              

