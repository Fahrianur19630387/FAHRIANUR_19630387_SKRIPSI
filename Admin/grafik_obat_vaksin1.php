
<?php
  include "../fungsi/koneksi.php";


$produk = mysqli_query($koneksi,"select * from stokbarang");
while($row = mysqli_fetch_array($produk)){
	$category[] = $row['category'];
	
	
	$query = mysqli_query($koneksi,"select sum(stok) as stok from stokbarang where category='".$row['category']."'");
	$row = $query->fetch_array();
	$stok[] = $row['stok'];
}
?>






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
            <h1>GRAFIK &raquo;<small>GRAFIK OBAT</small></h1>
           <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="grafik_obat.php">Grafik Obat</a></li>
    <li class="breadcrumb-item">Grafik Obat</a></li>
  </ol>
          </div>
       
</div>
      
         <!DOCTYPE html>
<html>
<head>
	<title>Membuat Grafik Menggunakan Chart JS</title>
	<script type="text/javascript" src="../vendor/chart.js/Chart.js"></script>
</head>
<body>
	<div style="width: 800px;height: 800px">
		<canvas id="myChart"></canvas>
	</div>


	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($category); ?>,
				datasets: [{
					label: 'GRAFIK DATA OBAT',
					data: <?php echo json_encode($stok); ?>,
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

             
              

