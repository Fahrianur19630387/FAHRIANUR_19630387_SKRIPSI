<?php  

include_once "../fungsi/koneksi.php";
include_once "../fungsi/fungsi.php";

if(isset($_POST['simpan'])) {
    $kode = $_POST['kode'];
    $kandang = $_POST['kandang'];
    $jumlah = $_POST['jumlah'];
    $grade_a = $_POST['grade_a'];
    $grade_b = $_POST['grade_b'];
    $komersil = $_POST['komersil'];
    
    $totalkualitas= $grade_a + $grade_b + $komersil;

    // cek apakah jumlah produksi sama dengan TOTAL KUALITAS TELUR(grade a + grade b + komersil)
    $querycek = "SELECT * FROM produksi WHERE kode='$kode'";
    $hasilcek = mysqli_query($koneksi,$querycek);
    $datacek = mysqli_num_rows($hasilcek);

    if ($jumlah != $totalkualitas ) { //jika jumlah produksi tidak sama dengan TOTAL KUALITAS TELUR(grade a + grade b + komersil)
      echo "<script type='text/javascript'>alert('Jumlah Produksi Tidak Sama Dengan Jumlah Grade A+B+K');</script>";
    } else {
      //perintah ubah data
      $query = "INSERT INTO produksi(kode, kandang, jumlah, grade_a, grade_b, komersil) 
          VALUES('$kode', '$kandang', '$jumlah','$grade_a', '$grade_b', '$komersil')";
  //      var_dump($query);
  // die();      
      //Cek
      if (mysqli_query($koneksi, $query)){
           echo '<script language="javascript">alert("Data Berhasil Disimpan !!!"); document.location="index.php?p=material-pr";</script>';
      } else {
        echo "Gagal";
      }
    }
  }
?>
<section class="content">
    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="text-center">Tambah Data Produksi</h3>
                </div>
                <form method="post"  action="" class="form-horizontal" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group ">
                            <label for="kode_brg" class="col-sm-offset-1 col-sm-3 control-label">Kode Farm</label>
                            <div class="col-sm-4">
                                <input  required type="number"  class="form-control" name="kode">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="kandang"class="col-sm-offset-1 col-sm-3 control-label">Kandang</label>
                            <div class="col-sm-4">
                                <input required type="text" class="form-control" name="kandang">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="jumlah"class="col-sm-offset-1 col-sm-3 control-label">Jumlah</label>
                            <div class="col-sm-4">
                                <input required type="text" class="form-control" name="jumlah">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="grade_a"class="col-sm-offset-1 col-sm-3 control-label">Garde A</label>
                            <div class="col-sm-4">
                                <input required type="number" class="form-control" name="grade_a">
                            </div>
                        </div>
                        </div>

                        <div class="form-group ">
                            <label for="grade_b"class="col-sm-offset-1 col-sm-3 control-label">Grade B</label>
                            <div class="col-sm-4">
                                <input required type="number" class="form-control" name="grade_b">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="komersil"class="col-sm-offset-1 col-sm-3 control-label">Abnormal</label>
                            <div class="col-sm-4">
                                <input required type="number" class="form-control" name="komersil">
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


