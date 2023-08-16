<?php  

	include "../fungsi/koneksi.php";

	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$tanggal = date('Y-m-d');
		
		$query1 = mysqli_query($koneksi, "UPDATE masuk SET status=1 WHERE id_masuk='$id' ");		

		$query2 = mysqli_query($koneksi, "SELECT * FROM masuk WHERE id_masuk='$id'");
		
		$row = mysqli_fetch_assoc($query2);

		$query3 = mysqli_query($koneksi, "INSERT INTO pemasukan (unit, kode_brg, jumlah, tgl_masuk)
											VALUES ('$row[unit]', '$row[kode_brg]', '$row[jumlah]', '$tanggal' ) ");
		
		
		if($query3) {
			header("location:index.php?p=datamasukan");
		} else {
			echo "ada yang salah" . mysqli_error($koneksi);
		}

		
	}


?>