<?php
include "../fungsi/koneksi.php";

if(isset($_GET['id'])){
	$id=$_GET['id'];
	
	$query = mysqli_query($koneksi,"delete from pemeliharaan where no_service='$id'");
	if ($query) {
		echo '<script language="javascript">alert("Data Berhasil Di Hapus !!!"); document.location="index.php?p=data_pemeliharaan";</script>';
	} else {
		echo 'gagal';
	}
	
}
?>