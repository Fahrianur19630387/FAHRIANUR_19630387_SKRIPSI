<?php  

include "../fungsi/koneksi.php";

if(isset($_POST['simpan'])) {

	$kode_brg = $_POST['kode_brg'];
	$id_jenis = $_POST['id_jenis'];
	$nama_brg = $_POST['nama_brg'];
	$category = $_POST['category'];
	$satuan = $_POST['satuan'];
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
$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM stokbarang WHERE kode_brg='$kode_brg'"));
  if ($cek > 0){
    echo "<script>window.alert('Kode Barang Barang Sudah Ada')
    window.location='index.php?p=tambahmaterial-m3'</script>";
  }else {

$query = "INSERT into stokbarang (kode_brg, id_jenis, nama_brg, category, satuan, gambar) VALUES 
	('$kode_brg', '$id_jenis', '$nama_brg','$category', '$satuan', '$gambarBaru'); 
	";

	
	$hasil = mysqli_query($koneksi, $query);
	if ($hasil) {
		echo '<script language="javascript">alert("Data Berhasil Disimpan !!!"); document.location="index.php?p=material-m3&id_jenis=3";</script>';
	} else {
		die("ada kesalahan : " . mysqli_error($koneksi));
	}

}
}