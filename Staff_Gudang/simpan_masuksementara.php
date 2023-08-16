<?php  

include "../fungsi/koneksi.php";

if(isset($_POST['simpanmasuk'])) {

	$unit = $_POST['unit'];
	$instansi = $_POST['staff_gudang'];
	$kode_brg = $_POST['kode_brg'];
	$jumlah = $_POST['jumlah'];	
	$satuan = $_POST['satuan'];
	$tgl_masuk = date('Y-m-d');
	$id_jenis = $_POST['id_jenis'];

//script validasi data

	$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM masuk_sementara WHERE kode_brg='$kode_brg'"));
	if ($cek > 0){
		echo "<script>window.alert('Nama Barang Sudah Ada')
		window.location='index.php?p=barangmasuk'</script>";
	}else {
		$query = "INSERT into masuk_sementara (unit, kode_brg, id_jenis,  jumlah, satuan,  tgl_masuk) VALUES 
		('$unit', '$kode_brg', '$id_jenis', '$jumlah', '$satuan', '$tgl_masuk')

		";
		$hasil = mysqli_query($koneksi, $query);
		if ($hasil) {
			header("location:index.php?p=formbarangmasuk");
		} else {
			die("ada kesalahan : " . mysqli_error($koneksi));
		}
	}
} 
?>