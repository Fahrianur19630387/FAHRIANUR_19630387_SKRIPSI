<?php  
include "../fungsi/koneksi.php";
$error = "";


?>

<section class="content">
    <div class="row">
        <div class="col-sm-6 col-xs-18">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="text-center">Form Barang Masuk</h3>
                </div>
                <form method="post" id="tes"  action="simpan_masuksementara.php" class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group ">
                            <label for="unit" class="a col-sm-3 control-label">Usernames</label>
                            <div class="col-sm-3">
                                <input type="text" readonly value="<?= $_SESSION['username']; ?>" class="form-control" name="unit">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="instansi" class=" col-sm-3 control-label">Instansi</label>
                            <div class="col-sm-5">
                                <input id="instansi" type="text" readonly value="<?= $_SESSION['jabatan']; ?>" class="form-control" name="instansi" >                                
                            </div>
                            <span class="col-sm-7"> <?php echo $error; ?></span>
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
                                <label for="stok" class="col-sm-3 control-label">Stok Tersedia</label>
                                <div class="col-sm-2">
                                    <input id="stok" disabled value="----" type="text" class="form-control" name="stok">
                                </div>                                                        
                            </div>
                            <div class="form-group">
                                <label for="satuan" class="col-sm-3 control-label">Satuan</label>
                                <div class="col-sm-4">
                                    <input id="satuan" type="text" class="form-control" name="satuan" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="stok" class=" col-sm-3 control-label">Jumlah</label>
                                <div class="col-sm-2">
                                    <input  id="jumlah" type="number"  class="form-control" name="jumlah" required>                                
                                </div>
                                <span class="col-sm-5"> <?php echo $error; ?></span>
                            </div>

                            <div class="form-group" >
                                <input type="submit" id="simpanmasuk" name="simpanmasuk" class="btn btn-primary col-sm-offset-3 " value="Simpan" > 
                                &nbsp;
                                <input type="reset" class="btn btn-danger" value="Batal">                                                                              
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-sm-6 col-xs-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="text-center">Data Barang Masuk</h3>
                    </div>

                    <table class="table table-responsive">
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Satuan</th>
                            <th>jumlah</th>
                            <th>Aksi</th>
                        </tr>
                        <tr>
                            <?php 
                            $sekarang  = date("Y-m-d");
                            $queryTampil = mysqli_query($koneksi, "SELECT masuk_sementara.jumlah ,masuk_sementara.satuan, masuk_sementara.unit, masuk_sementara.id_masuk_sementara, stokbarang.nama_brg FROM masuk_sementara INNER JOIN stokbarang ON masuk_sementara.kode_brg  = stokbarang.kode_brg WHERE tgl_masuk = '$sekarang' AND masuk_sementara.unit='$_SESSION[username]' "  );
                            $no = 1;
                            if(mysqli_num_rows($queryTampil) > 0) {
                                while($row = mysqli_fetch_assoc($queryTampil)):


                                   ?>
                                   <td><?php echo $no; ?></td>
                                   <td><?php echo $row['nama_brg']; ?></td>
                                   <td><?php echo $row['satuan'] ?></td>
                                   <td><?php echo $row['jumlah']; ?> </td>
                                   
                                   

                                   <td><a href="hapus_masuksementara.php?id=<?php echo $row['id_masuk_sementara']; ?>" class="btn btn-danger">Hapus</a></td>
                               </tr>
                               <?php $no++; endwhile; } else { echo "<tr><td>Tidak ada barang masuk</td></tr>"; } ?>

                              


                              </table>    

                          
                          <div class="box-body">   
                            <a class="btn btn-success" href="pesanmasuk.php" >Buat Pengajuan</a>
                </div>     <!--<a class="btn btn-success" href="pesanpengajuan.php" >
                Minta Barang</a> -->
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
                url:"getdatamasuk.php",
                data:dataString,
                success:function(html){
                    $("#nama_brg").html(html);                    
                }
            });
        });

        $("#nama_brg").change(function(){
            var kode = $(this).val();
            var dataString = 'kode='+kode;
            $.ajax({
                type:"POST",
                url:"getkodemasuk.php",
                data:dataString,
                success:function(html){
                    $("#stok").val(html);        
                }
            });
        });

        $("#nama_brg").change(function(){
            var kode = $(this).val();
            var dataString = 'kode='+kode;
            $.ajax({
                type:"POST",
                url:"getsatuanmasuk.php",
                data:dataString,
                success:function(html){
                    $("#satuan").val(html);        
                }
            });
        });
        $("#nama_brg").change(function(){
            var kode = $(this).val();
            var dataString = 'kode='+kode;
            $.ajax({
                type:"POST",
                url:"getcategorymasuk.php",
                data:dataString,
                success:function(html){
                    $("#category").val(html);        
                }
            });
        });

    });


</script>