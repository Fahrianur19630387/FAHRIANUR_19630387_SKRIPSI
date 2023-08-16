<?php
include "../fungsi/koneksi.php";

if(isset($_GET['id'])){
	$id=$_GET['id'];
	
	$query = mysqli_query($koneksi,"delete from produksi where kode='$id'");
	if ($query) {
		echo '<script language="javascript">alert("Data Berhasil Di Hapus !!!"); document.location="index.php?p=data_produksi_telur";</script>';
	} else {
		echo 'gagal';
	}
	
}
?>