<?php  
	include "../fungsi/koneksi.php";

    //mengambil id untuk edit user
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = mysqli_query($koneksi, "SELECT * FROM produksi WHERE kode = $id ");
		if (mysqli_num_rows($query)) {
			while($row2 = mysqli_fetch_assoc($query)):
?>

<section class="content">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="text-center">Edit Data Produksi</h3>
                </div>                
                <form method="post"  action="edituproduksi.php" class="form-horizontal" enctype="multipart/form-data">
                    <div class="box-body">
                     <div class="row">
                        <div class="col-md-2">
                            <a href="index.php?p=material-pr" class="btn btn-primary"><i class="fa fa-backward"></i> Kembali</a> 
                        </div>
                        <br><br>
                    </div>     
                    	<input type="hidden" name="id" value="<?= $row2['kode']; ?>">
                        <div class="form-group ">
                            <label for="kode" class="col-sm-offset-1 col-sm-3 control-label">Kode </label>
                            <div class="col-sm-4">
                                <input type="number"  required value="<?= $row2['kode']; ?>" class="form-control" name="kode">
                            </div>
                        </div>

                         <div class="form-group ">
                            <label for="kandang" class="col-sm-offset-1 col-sm-3 control-label">Kandang</label>
                            <div class="col-sm-4">
                                <input type="text" value="<?= $row2['kandang'];  ?>" required  class="form-control" name="kandang">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="jumlah" class="col-sm-offset-1 col-sm-3 control-label">Jumlah</label>
                            <div class="col-sm-4">
                                <input type="number" value="<?= $row2['jumlah'];  ?>" required  class="form-control" name="jumlah">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="grade_a" class="col-sm-offset-1 col-sm-3 control-label">Garde A</label>
                            <div class="col-sm-4">
                                <input type="number" value="<?= $row2['grade_a'];  ?>" required  class="form-control" name="grade_a">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="grade_b" class="col-sm-offset-1 col-sm-3 control-label">Grade B</label>
                            <div class="col-sm-4">
                                <input type="number" value="<?= $row2['grade_b'];  ?>" required  class="form-control" name="grade_b">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="komersil" class="col-sm-offset-1 col-sm-3 control-label">Komersil</label>
                            <div class="col-sm-4">
                                <input type="number" value="<?= $row2['komersil'];  ?>" required  class="form-control" name="komersil">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="update" class="btn btn-primary col-sm-offset-4 " value="Simpan" > 
                            &nbsp;
                            <input type="reset" class="btn btn-danger" value="Batal">                                                                              
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>--
</section>

<?php endwhile; } }  ?>