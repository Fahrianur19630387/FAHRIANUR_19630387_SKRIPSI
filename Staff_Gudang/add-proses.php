
<?php  

include "../fungsi/koneksi.php";

if(isset($_POST['simpanmasuk'])) {

	$unit = $_POST['unit'];
	$jabatan= $_POST['jabatan'];
	$kode_brg = $_POST['kode_brg'];
	$id_jenis = $_POST['id_jenis'];
	$jumlah = $_POST['jumlah'];		
	$tgl_permintaan = date('Y-m-d');
	$tujuan = $_POST['tujuan'];	
	$status= $_POST['status'];	


//script validasi data

	$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM sementara WHERE kode_brg='$kode_brg'"));
	if ($cek > 0){
		echo "<script>window.alert('Nama Barang Sudah Ada')
		window.location='index.php?p=barangmasuk'</script>";
	}else {
		$query = "INSERT into sementara ( unit, jabatan, kode_brg, id_jenis, jumlah, tgl_permintaan, tujuan, status) VALUES 
		( '$unit','$jabatan', '$kode_brg', '$id_jenis', '$jumlah', '$tgl_permintaan','$tujuan','$status')

		";
		$hasil = mysqli_query($koneksi, $query);
		if ($hasil) {
			header("location:index.php?p=formpesan");
		} else {
			die("ada kesalahan : " . mysqli_error($koneksi));
		}
	}
} 
?>