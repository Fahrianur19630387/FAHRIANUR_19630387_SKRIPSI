<?php  

include_once "../fungsi/koneksi.php";
include_once "../fungsi/fungsi.php";

if(isset($_POST['simpan'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];
    $jabatan = $_POST['jabatan'];
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
    

    $query = mysqli_query($koneksi, "INSERT INTO user VALUES ('', '$username', '$password', '$level','$jabatan', '$gambarBaru') ");        
    if ($query) {
     echo '<script language="javascript">alert("Data Berhasil Disimpan !!!"); document.location="index.php?p=user";</script>';
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
                    <h3 class="text-center">Tambah Data User</h3>
                </div>
                <form method="post"  action="" class="form-horizontal" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group ">
                            <label for="username" class="col-sm-offset-1 col-sm-3 control-label">Username</label>
                            <div class="col-sm-4">
                                <input  required type="text"  class="form-control" name="username">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="paswword"class="col-sm-offset-1 col-sm-3 control-label">Password</label>
                            <div class="col-sm-4">
                                <input required type="password" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="form-group ">
                   <div class="form-group ">
                            <label for="gambar" class="col-sm-offset-1 col-sm-3 control-label">Gambar</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control-file" name="gambar" required oninvalid="this.setCustomValidity('Harap isi bidang ini')" oninput="setCustomValidity('')">
                                
                            </div>
                        </div>                <label for="jabatan" class="col-sm-offset-1 col-sm-3 control-label">jabatan</label>
                            <div class="col-sm-4">
                                <input  required type="text"  class="form-control" name="jabatan">
                            </div>
                        </div>  

                        <div class="form-group">
                            <label id="tes"for="nama_brg" class="col-sm-offset-1 col-sm-3 control-label">Level</label>
                            <div class="col-sm-4">
                                <select required name="level" class="form-control">
                                    <option >--Pilih Level--</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Staff_Gudang">Staff Gudang</option>
                                    
                                </select>
                            </div>
                        </div>  
                                            
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


