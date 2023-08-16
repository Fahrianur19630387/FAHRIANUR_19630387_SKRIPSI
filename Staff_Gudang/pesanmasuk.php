<?php  

include "../fungsi/koneksi.php";
$tgl = date('Y-m-d');



$query =  "INSERT INTO masuk SELECT * FROM masuk_sementara";
$query2 = "DELETE FROM masuk_sementara WHERE tgl_masuk='$tgl'";



if(mysqli_query($koneksi, $query)){
	mysqli_query($koneksi, $query2);
	echo '<script language="javascript">alert("Form Masuk Berhasil Di Buat  !!!"); document.location="index.php?p=datamasuk";</script>';
} else {
	echo "gagal euy" . mysqli_error($koneksi);
}


?>