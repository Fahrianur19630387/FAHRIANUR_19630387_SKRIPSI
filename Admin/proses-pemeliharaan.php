<?php  

include "../fungsi/koneksi.php";

if(isset($_POST['simpan'])) {

	$no_service = $_POST['no_service'];
  $kode_brg = $_POST['kode_brg'];
  $nama_brg = $_POST['nama_brg'];
  $jumlah = $_POST['jumlah'];
  $catatan = $_POST['catatan'];
	$gambar = $_FILES['gambar']['name'];	


	$ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

  // cek apakah ada gambar
    if ( $error === 4 ) {
      echo "<script>
          alert('pilih gambar dulu!');
          </script>";
      return false;   
    }

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

		//die($stok);


	
		$query = "INSERT into pemeliharaan (no_service, kode_brg, nama_brg,  jumlah, catatan, gambar) VALUES 
		('$no_service', '$kode_brg', '$nama_brg', '$jumlah', '$catatan','$gambarBaru')";


		$hasil = mysqli_query($koneksi, $query);
		if ($hasil) {
			header("location:index.php?p=datapemeliharaan");
		} else {
			die("ada kesalahan : " . mysqli_error($koneksi));
		}
	}

?>