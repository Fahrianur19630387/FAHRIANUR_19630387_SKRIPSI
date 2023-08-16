


<?php
  include "../fungsi/koneksi.php";
  include "../fungsi/fungsi.php";

  //$query = "SELECT * FROM stokbarang";
    //$hasil = mysqli_query($koneksi,$query);
$produk = mysqli_query($koneksi,"select * from stokbarang");
while($row = mysqli_fetch_array($produk)){
	$category[] = $row['category'];
	
	$produk = mysqli_query($koneksi,"select sum(stok) as stok from stokbarang where category='".$row['category']."'");
	$row = $produk->fetch_array();
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
    <li class="breadcrumb-item"><a href="grafik_obat_vaksin.php">Grafik Obat Vaksin</a></li>
    <li class="breadcrumb-item">Grafik Obat Vaksin</a></li>
  </ol>
          </div>
       
</div>
      
         <!DOCTYPE html>
<html>
<head>
	<title>Membuat Grafik Menggunakan Chart JS</title>
	<script type="text/javascript" src="../vendor/chart.js/Chart.js"></script>
</head>
<main>

<div class="container ">
  <div class="row justify-content-center">
    <div class="card border-dark col-md-6">
      <div class="card-header">
        <strong>GRAFIK OBAT BERDASARKAN CATEGORY</strong>
      </div>
        <div class="card-body">
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
  <style type="text/css">
    body{
      font-family: roboto;
    }
  </style>


  <div style="width: 500px;height: 300px">
    <canvas id="myChart"></canvas>
  </div>


  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {



        

        labels: ["VACC_VACCINE", "MED_MEDICINE", "DISF_DISINFECTANT"],
        datasets: [{
          label: 'Garafik Obat Berdasarkan category',
          data: [<?php
    
          $category = mysqli_query($koneksi,"select sum(stok) as stok from stokbarang where category='VACC_VACCINE'");
          echo mysqli_num_rows($category);''
          
          ?>,
          <?php 
          $category = mysqli_query($koneksi,"select sum(stok) as stok from stokbarang where category='MED_MEDICINE'");
          echo mysqli_num_rows($category);
          ?>,  <?php 
          $category = mysqli_query($koneksi,"select sum(stok) as stok from stokbarang where category='DISF_DISINFECTANT'");
          echo mysqli_num_rows($category);
          ?>],
          
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)'
          ],
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

<table border="1" bgcolor="border-dark" align="center" style="border-collapse:collapse;" margin-top="20px"; width="100%">
<tr>

    <td width="50px"align="center"><b>No</b></td>
    <td width="150px" align="center"><b>CATEGORY</b></td>
    
    <td width="150px" align="center"><b>JUMLAH</b></td>
    <td width="150px" align="center"><b>PERSENTASE(%)</b></td>

  </tr>
  
  <tr>

    <td  align="center">1</td>
    <td>VACC_VACCINE</td>
    
    <td align="center"><?php 
 


  include "../fungsi/koneksi.php";

  

  $produk = "SELECT * FROM stokbarang WHERE stokbarang.category ='VACC_VACCINE' ";
    $hasil = mysqli_query($koneksi,$produk);
  $VACC_VACCINE = mysqli_num_rows($hasil);
  echo "$VACC_VACCINE";


?>
  <td align="center">
    <?php 
  
$produk = "SELECT * FROM stokbarang";
    $hasil = mysqli_query($koneksi,$produk);
  $dataobat = mysqli_num_rows($hasil);

    $produk = "SELECT * FROM stokbarang WHERE stokbarang.category ='VACC_VACCINE' ";
    $hasil = mysqli_query($koneksi,$produk);
  $dataVACC_VACCINE = mysqli_num_rows($hasil);

echo (round($dataVACC_VACCINE / $dataobat * 100,2)) ;

          ?></td>
</td>
  </tr>


  <tr>

 <td  align="center">1</td>
    <td>MED_MEDICINE</td>
    
    <td align="center"><?php 
 


  include "../fungsi/koneksi.php";

  

  $produk = "SELECT * FROM stokbarang WHERE stokbarang.category ='MED_MEDICINE' ";
    $hasil = mysqli_query($koneksi,$produk);
  $MED_MEDICINE= mysqli_num_rows($hasil);
  echo "$MED_MEDICINE";


?>
  <td align="center">
    <?php 
  
$produk = "SELECT * FROM stokbarang";
    $hasil = mysqli_query($koneksi,$produk);
  $dataobat = mysqli_num_rows($hasil);

    $produk = "SELECT * FROM stokbarang WHERE stokbarang.category ='MED_MEDICINE' ";
    $hasil = mysqli_query($koneksi,$produk);
  $datalakilaki = mysqli_num_rows($hasil);

echo (round($datalakilaki / $dataobat * 100,2)) ;

          ?></td>
</td>
  </tr>


  <tr>


    <td align="center">2</td>
    <td>DISF_DISINFECTANT</td>
    
    <td align="center"><?php 
 


  include "../fungsi/koneksi.php";
  

  $produk = "SELECT * FROM stokbarang WHERE stokbarang.category ='DISF_DISINFECTANT' ";
    $hasil = mysqli_query($koneksi,$produk);
  $DISF_DISINFECTANT = mysqli_num_rows($hasil);
  echo "$DISF_DISINFECTANT";


?></td>
<td align="center"><?php 
  
$produk = "SELECT * FROM stokbarang";
    $hasil = mysqli_query($koneksi,$produk);
  $dataobat = mysqli_num_rows($hasil);

    $produk = "SELECT * FROM stokbarang WHERE stokbarang.category ='DISF_DISINFECTANT' ";
    $hasil = mysqli_query($koneksi,$produk);
  $dataDISF_DISINFECTANT = mysqli_num_rows($hasil);

echo (round($dataDISF_DISINFECTANT / $dataobat * 100,2)) ;

          ?></td>
  </tr>


  <tr>
   
    <td width="150px" align="center" colspan="2"><b>JUMLAH</b></td>
    <td align="center"><?php 
  
$produk = "SELECT * FROM stokbarang";
    $hasil = mysqli_query($koneksi,$produk);
  $dataobat = mysqli_num_rows($hasil);


echo ($dataobat) ;

          ?></td>
    <td align="center"><?php 
  
$produk = "SELECT * FROM stokbarang";
    $hasil = mysqli_query($koneksi,$produk);
  $dataobat = mysqli_num_rows($hasil);

  

echo(round($dataobat/$dataobat*100,2)) ;

          ?>%</td>

  </tr>

  
</table>
</form>

