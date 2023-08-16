<?php  

include "../fungsi/koneksi.php";

if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$tanggal = date('Y-m-d');
	
	$query1 = mysqli_query($koneksi, "UPDATE pemeliharaan SET status=1 WHERE no_service='$id' ");		

	$query2 = mysqli_query($koneksi, "SELECT * FROM pemeliharaan WHERE no_service='$id'");
	
	$row = mysqli_fetch_assoc($query2);

	

	if($query2) {
		header("location:index.php?p=data_permintaan_pemeliharaan_barang&tgl=$tgl&unit=$unit");
	} else {
		echo "ada yang salah" . mysqli_error($koneksi);
	}
}


?>