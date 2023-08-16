<?php
include "../fungsi/koneksi.php";

if(isset($_GET['id'])){
	$id=$_GET['id'];
	
	$query = mysqli_query($koneksi,"delete from produksi where kode_brg='$id'");
	if ($query) {
		echo '<script language="javascript">alert("Data Berhasil Di Hapus !!!"); document.location="index.php?p=material-pr";</script>';
	} else {
		echo 'gagal';
	}
	
}
?>