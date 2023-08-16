<!DOCTYPE html>
<html>
<head>
  
    <title>Membuat Grafik Menggunakan Chart JS</title>
    <script type="text/javascript" src="../vendor/chart.js/Chart.js"></script>

</head>
<body>
    <br>
    <h4>Cara Membuat Grafik (Chart) di PHP dengan Chart.js</h4>
    <canvas id="myChart"></canvas>
    <?php
    include "../fungsi/koneksi.php";
    //Query untuk menampilkan tabel produksi
        $grade_1= "";
        $jumlah1=null;

        $sql="select grade_a,COUNT(*) as 'total' from produksi GROUP by grade_a";

    $hasil=mysqli_query($kon,$sql);

    while ($data = mysqli_fetch_array($hasil)) {
        $grade_1a=$data['jurusan'];
        $grade_1 .= "'$grade_1a'". ", ";

        $jum1=$data['total'];
        $jumlah1 .= "$jum1". ", ";
    }
    //Query untuk menampilkan tabel produksi
    $nama_grade_2= "";
    $jumlah2=null;

    $sql="select grade_b,COUNT(*) as 'total' from produksi GROUP by grade_b";

    $hasil=mysqli_query($kon,$sql);

    while ($data = mysqli_fetch_array($hasil)) {
        $grade_2b=$data['jurusan'];
        $nama_grade_2 .= "'$grade_2b'". ", ";

        $jum2=$data['total'];
        $jumlah2 .= "$jum2". ", ";
    }
    ?>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: [<?php echo $grade_1; ?>],
            datasets: [{
                label:'Data Jurusan Mahasiswa 1',
                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah1; ?>]
            },
                {
                    label:'Data Jurusan Mahasiswa 2',
                    backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
                    borderColor: ['rgb(255, 99, 132)'],
                    data: [<?php echo $jumlah2; ?>]
                }
            ]
        },

        // Configuration options go here
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