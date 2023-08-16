<?php  

include "../fungsi/koneksi.php";

if(isset($_POST['update'])) {
	$id = $_POST['id'];
	
	$username = $_POST['username'];
	$jabatan = $_POST['jabatan'];
	$level = $_POST['level'];	
	if(!empty($_FILES['gambar']['tmp_name'])){ // Jika file dipilih
  // Ambil data foto yang dipilih dari form
  $gambar = $_FILES['gambar']['name'];
  
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];
  $pesan = '';    
   
  // Set path folder tempat menyimpan fotonya
// cek apakah yg di upload gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $gambar);
    $ekstensiGambar = strtolower( end($ekstensiGambar) );
    if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
      echo "<script>
          alert('Yang anda upload bukan gambar!');
          </script>";
      return false;
    }

    // cek jika ukurannya terlalu besar
    if ( $ukuranFile > 1000000 ) {
      echo "<script>
          alert('gambar terlalu besar!')
          </script>";
      return false;
    }
    // generate nama gambar baru
      $gambarBaru = uniqid();
      $gambarBaru .= '.';
      $gambarBaru .= $ekstensiGambar;
	  // lolos pengecekan, gambar siap diupload
    move_uploaded_file($tmpName, '../galeri/'.$gambarBaru);
  $query = "SELECT * FROM user WHERE id_user='$id' "; //mengambil data gambar dari file yang diupload
        $sql = mysqli_query($koneksi, $query);
        $row2 = mysqli_fetch_array($sql); 

        // Cek apakah file foto sebelumnya ada di folder gambar
        if(is_file("../galeri/".$row2['gambar'])){ // Jika foto ada
          unlink("../galeri/".$row2['gambar']); // Hapus file foto sebelumnya yang ada di folder


        // Proses ubah data ke Database
        $query = "UPDATE user
            SET 
            gambar='$gambarBaru'
            WHERE id_user='$id' ";
	 //Cek
          if (mysqli_query($koneksi, $query)){
				echo '<script language="javascript">alert("Data Berhasil Di Ubah !!!"); document.location="index.php?p=user";</script>';
          } else {
            echo "Gagal";
          }
        } else {
          echo "Gagal Upload";
        } 
      $pesan = "Maaf, Gambar gagal untuk diupload.";  
      die($pesan);
        
}   

  else{
  // Jika file tidak dipilih
      // Proses ubah data ke Database
    $query = "UPDATE user
            SET id_user='$id',
            username='$username',
            jabatan='$jabatan',
            level='level'

            WHERE id_user='$id' ";




	$query = mysqli_query($koneksi, "UPDATE user SET username='$username', jabatan='$jabatan', level='$level' WHERE id_user ='$id' ");
	
	if ($query) {
		echo '<script language="javascript">alert("Data Berhasil Di Ubah !!!"); document.location="index.php?p=user";</script>';
	} else {
		echo 'error' . mysqli_error($koneksi);
	}

}

}

?>
