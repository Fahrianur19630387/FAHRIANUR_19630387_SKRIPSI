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
<head>
  <title>LAPORAN GRAFIK PRODUKSI BERDASARKAN GRADE TELUR</title>
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
        
        <H4><b>LAPORAN GRAFIK PRODUKSI BERDASARKAN GRADE TELUR</b></H4>
             <table>
  <tr>
    <td align="left"><b>Jenis Transaksi</b></td>
    <td ><b>:</b></td>
    <td width="600px" align="left"><b>REPORT PRODUKSI</b></td>
    
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

              <script type="text/javascript" src="../vendor/chart.js/Chart.js"></script>
</head>
<body>
  <div style="width: 800px;height: 800px">
    <canvas id="myChart"></canvas>
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

             
              

