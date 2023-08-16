<?php  

include_once "../fungsi/koneksi.php";
include_once "../fungsi/fungsi.php";

if(isset($_POST['simpan'])) {
    $no_service = $_POST['no_service'];
    $nama_brg = $_POST['nama_brg'];
    $jumlah = $_POST['jumlah'];
    $catatan = $_POST['catatan'];
    $unit = $_POST['unit'];
    $status = $_POST['status'];
    $tgl_pemeliharaan = date('Y-m-d');
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
    
    $query = mysqli_query($koneksi, "INSERT INTO pemeliharaan VALUES ('$no_service', '$nama_brg', '$jumlah', '$catatan', '$unit','$status','$tgl_pemeliharaan','$gambarBaru') ");        
    if ($query) {
     echo '<script language="javascript">alert("Data Berhasil Disimpan !!!"); document.location="index.php?p=data_pemeliharaan";</script>';
 } else {
    echo 'gagal : ' . mysqli_error($koneksi);
}
}


?>

<section class="content">
    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="text-center">Tambah Data Service</h3>
                </div>
                <form method="post"  action="" class="form-horizontal" enctype="multipart/form-data">
                    <div class="box-body">
                          <div class="form-group ">
                           
                            <label for="nama_brg" class="col-sm-offset-1 col-sm-3 control-label">Usernames</label>
                            <div class="col-sm-4">
                                <input type="text" readonly value="<?= $_SESSION['username']; ?>" class="form-control" name="unit">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jabatan" class="col-sm-offset-1 col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-4">
                                <input id="jabatan" type="text" readonly value="<?= $_SESSION['jabatan']; ?>" class="form-control" name="jabatan" >                                
                            </div> 
                        </div>
                        <div class="form-group ">
                            <label for="no_service" class="col-sm-offset-1 col-sm-3 control-label">No Service</label>
                            <div class="col-sm-4">
                                <input  required type="text"  class="form-control" name="no_service">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="paswword"class="col-sm-offset-1 col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-4">
                                <input required type="nama_brg" class="form-control" name="nama_brg">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="paswword"class="col-sm-offset-1 col-sm-3 control-label">Jumlah</label>
                            <div class="col-sm-4">
                                <input required type="jumlah" class="form-control" name="jumlah">
                            </div>
                        </div>
                         <div class="form-group ">
                            <label for="paswword"class="col-sm-offset-1 col-sm-3 control-label">Catatan</label>
                            <div class="col-sm-4">
                                <input required type="catatan" class="form-control" name="catatan">
                            </div>
                        </div>
                       
                        <div class="form-group ">
                   <div class="form-group ">
                            <label for="gambar" class="col-sm-offset-1 col-sm-3 control-label">Gambar</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control-file" name="gambar" required oninvalid="this.setCustomValidity('Harap isi bidang ini')" oninput="setCustomValidity('')">
                                
                            </div>
                        
                        </div>  
                            <input type="hidden" name="status" class="form-control" name="status">
                       
                                            
                        <div class="form-group">
                            <input type="submit" name="simpan" class="btn btn-primary col-sm-offset-4 " value="Simpan" > 
                            &nbsp;
                            <input type="reset" class="btn btn-danger" value="Batal">                                                                              
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


