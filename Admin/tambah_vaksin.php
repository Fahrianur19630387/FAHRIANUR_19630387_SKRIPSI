<?php  

include_once "../fungsi/koneksi.php";

if(isset($_POST['simpan'])) {
    $no_vaksin = $_POST['no_vaksin'];
    $nama = $_POST['nama'];
    $satuan = $_POST['satuan'];
    $category = $_POST['category'];
    

    $query = mysqli_query($koneksi, "INSERT INTO tb_vaksin VALUES ('$no_vaksin', '$nama', '$satuan','$category') ");        
    if ($query) {
     echo '<script language="javascript">alert("Data Berhasil Disimpan !!!"); document.location="index.php?p=data_vaksin";</script>';
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
                    <h3 class="text-center">Tambah Data Vaksin</h3>
                </div>
                <form method="post"  action="" class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group ">
                            <label for="no_vaksin" class="col-sm-offset-1 col-sm-3 control-label">No Vaksin</label>
                            <div class="col-sm-4">
                                <input  required type="text"  class="form-control" name="no_vaksin">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="nama"class="col-sm-offset-1 col-sm-3 control-label">Nama</label>
                            <div class="col-sm-4">
                                <input required type="nama" class="form-control" name="nama">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="satuan" class="col-sm-offset-1 col-sm-3 control-label">Satuan</label>
                            <div class="col-sm-4">
                                <input  required type="text"  class="form-control" name="satuan">
                            </div>
                        </div>                       
                        <div class="form-group ">
                            <label for="category" class="col-sm-offset-1 col-sm-3 control-label">Category</label>
                            <div class="col-sm-4">
                                <input  required type="text"  class="form-control" name="category">
                            </div>
                        </div>                           
                        <div class="form-group">
                            <input type="submit" name="simpan" class="btn btn-primary col-sm-offset-4 " value="Simpan" > 
                            &nbsp;
                            <input type="reset" class="btn btn-danger" value="Batal">
                            <a href="index.php?p=data_vaksin&id_jenis=1" style="margin:10px;" class="btn btn-success"><i class='fa fa-backward'>  Kembali</i></a>                                                                              
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


