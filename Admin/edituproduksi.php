


<?php  

include "../fungsi/koneksi.php";

if(isset($_POST['update'])) {
	
 $kode= $_POST['kode'];
    $kandang = $_POST['kandang'];
    $jumlah = $_POST['jumlah'];
    $grade_a = $_POST['grade_a'];
    $grade_b = $_POST['grade_b'];
    $komersil = $_POST['komersil'];
    $totalkualitas= $grade_a + $grade_b + $komersil;


    
   

	if ($jumlah != $totalkualitas ) { //jika jumlah produksi tidak sama dengan TOTAL KUALITAS TELUR(grade a + grade b + komersil)
      echo "<script type='text/javascript'>alert('Jumlah Produksi Tidak Sama Dengan Jumlah Grade A+B+K'); document.location='index.php?p=data_produksi_telur';</script>";
    } else {
	$query = mysqli_query($koneksi, "UPDATE produksi SET kode='$kode', kandang='$kandang', jumlah='$jumlah', grade_a='$grade_a', grade_b='$grade_b', komersil='$komersil' WHERE kode ='$kode' ");
	if ($query) {
		echo '<script language="javascript">alert("Data Berhasil Di Ubah !!!"); document.location="index.php?p=data_produksi_telur";</script>';
	} else {
		echo 'error' . mysqli_error($koneksi);
	}

}

}

?>



	