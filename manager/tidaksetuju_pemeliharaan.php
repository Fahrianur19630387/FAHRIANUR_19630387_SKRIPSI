<?php  

include "../fungsi/koneksi.php";

if (isset($_GET['id']) && isset($_GET['tgl']) && isset($_GET['unit'])) {
	$id = $_GET['id'];
	$tgl = $_GET['tgl'];
	$unit = $_GET['unit'];

	$query = mysqli_query($koneksi, "UPDATE pemeliharaan SET status=2 WHERE no_service='$id' ");

	if($query) {
		header("location:index.php?p=data_permintaan_pemeliharaan_barang&tgl=$tgl&unit=$unit");
	} else {
		echo "error : " . mysqli_error($koneksi);
	}
}


?>