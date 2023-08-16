<?php  

include "../fungsi/koneksi.php";
$query = mysqli_query($koneksi, "SELECT MAX(kode_brg) from stokbarang WHERE id_jenis=4");
$kode_brg = mysqli_fetch_array($query);    
if ($kode_brg) {

    $nilaikode = substr($kode_brg[0], 4);
    
    $kode = (int) $nilaikode;

            //setiap kode ditambah 1
    $kode = $kode + 1;
    $kode_otomatis = "114.".str_pad($kode, 3, "0", STR_PAD_LEFT);                   
    
    
} else {
 $kode_otomatis = "114001";
}

?>

<section class="content">
    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="text-center">Tambah Data Stok Pakan</h3>
                </div>
                <form method="post"  action="add-proses-m4.php" class="form-horizontal" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group ">
                            <label for="nama_brg" class="col-sm-offset-1 col-sm-3 control-label">Kode Pakan</label>
                            <div class="col-sm-4">
                                <input type="text"  required="isikan dulu" class="form-control" name="kode_brg">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis_brg" class="col-sm-offset-1 col-sm-3 control-label">Jenis</label>
                            <div class="col-sm-4">
                                <select id="jenis_brg" required="isikan dulu" class="form-control" name="id_jenis">
                                    <option value="">--Pilih Jenis Barang--</option>
                                    <?php  
                                    
                                    $queryJenis = mysqli_query($koneksi, "select * from jenis_barang WHERE id_jenis=4");
                                    if (mysqli_num_rows($queryJenis)) {
                                        while($row=mysqli_fetch_assoc($queryJenis)):
                                            ?>                                        
                                            <option value="<?= $row['id_jenis']; ?>"><?= $row['jenis_brg']; ?></option>
                                        <?php endwhile; } ?>                                      
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label id="tes"for="nama_brg" class="col-sm-offset-1 col-sm-3 control-label">Nama Pakan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="nama_brg">
                                </div>
                            </div>
                            <div class="form-group">
                                <label id="tes"for="category" class="col-sm-offset-1 col-sm-3 control-label">category</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="category" name="category">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jumlah" class="col-sm-offset-1 col-sm-3 control-label">Satuan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="satuan">
                                </div>
                            </div>

                             <div class="form-group ">
                            <label for="gambar" class="col-sm-offset-1 col-sm-3 control-label">Gambar</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control-file" name="gambar" required oninvalid="this.setCustomValidity('Harap isi bidang ini')" oninput="setCustomValidity('')">
                                
                            </div>
                        </div>    
                            
                            <div class="form-group">
                                <input type="submit" name="simpan" class="btn btn-primary col-sm-offset-4 " value="Simpan" > 
                                &nbsp;
                                <input type="reset" class="btn btn-danger" value="Batal">           <a href="index.php?p=material-m4&id_jenis=4" style="margin:10px;" class="btn btn-success"><i class='fa fa-backward'>  Kembali</i></a>  
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function(){
            $('.tanggal').datepicker({
                format:"yyyy-mm-dd",
                autoclose:true
            });
        });
</script>