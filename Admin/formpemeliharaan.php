<?php  




include "../fungsi/koneksi.php";
$querycek = "SELECT * FROM pemeliharaan insert into kode_brg";
$no_service = mysqli_fetch_array($query);    
if ($no_service) {

    $nilaikode = substr($no_service[0], 4);
    
    $kode = (int) $nilaikode;

            //setiap kode ditambah 1
    $kode = $kode + 1;
    $kode_otomatis = "115.".str_pad($kode, 3, "0", STR_PAD_LEFT);                   
    
    
} else {
   $kode_otomatis = "115001";
}

?>

<section class="content">
    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="text-center">Tambah Data Service</h3>
                </div>
                <form method="post"  action="proses-pemeliharaan.php" class="form-horizontal" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group ">
                           <label for="no_service" class="col-sm-offset-1 col-sm-3 control-label">Nomor Service</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="no_service" >
                            </div>
                        </div>
                          <div class="form-group">
                            <label for="jenis_brg" class=" col-sm-3 control-label">Jenis Barang</label>
                            <div class="col-sm-5">
                                <select id="jenis_brg" required="isikan dulu" class="form-control" name="id_jenis">
                                    <option value="">--Pilih Jenis Barang--</option>
                                    <?php  
                                    include "../fungsi/koneksi.php";
                                    $queryJenis = mysqli_query($koneksi, "select * from jenis_barang");
                                    if (mysqli_num_rows($queryJenis)) {
                                        while($row=mysqli_fetch_assoc($queryJenis)):
                                            ?>                                        
                                            <option value="<?= $row['id_jenis']; ?>"><?= $row['jenis_brg']; ?></option>
                                        <?php endwhile; } ?>                                      
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  for="nama_brg" class="col-sm-3 control-label">Nama Barang</label>
                                <div class="col-sm-5">
                                    <select id="nama_brg" required="isikan dulu" class="form-control" name="kode_brg">
                                        <option value="">--Pilih Nama Barang--</option>                                                                  
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label id="jumlah"for="jumlah" class="col-sm-offset-1 col-sm-3 control-label">Jumlah</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="jumlah" name="jumlah">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="catatan" class="col-sm-offset-1 col-sm-3 control-label">Catatan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="catatan">
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
                                <input type="reset" class="btn btn-danger" value="Batal">                    
                                <a href="index.php?p=datapemeliharaan&id_jenis=5" style="margin:10px;" class="btn btn-success"><i class='fa fa-backward'>  Kembali</i></a>  

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>

    $(document).ready(function(){
        $("#jenis_brg").change(function(){
            var jenis = $(this).val();
            var dataString = 'jenis='+jenis;
            $.ajax({
                type:"POST",
                url:"getdata.php",
                data:dataString,
                success:function(html){
                    $("#nama_brg").html(html);                    
                }
            });
        });

            $('.tanggal').datepicker({
                format:"yyyy-mm-dd",
                autoclose:true
            });
        });
</script>