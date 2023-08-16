<?php  
      include "../fungsi/koneksi.php";
      if (isset($_GET['aksi']) && isset($_GET['id'])) {
        //die($id = $_GET['id']);
        $id = $_GET['id'];        

        if ($_GET['aksi'] == 'edit') {
            header("location:?p=edit_data_pemeliharaan&id=$id");
        } else if ($_GET['aksi'] == 'hapus') {
            header("location:?p=hapus_pemeliharaan&id=$id");
        } 
    }
	
	//$query = mysqli_query($koneksi, "SELECT * FROM user WHERE level!='manager' AND level!='upengadaan' ORDER BY level DESC");	
    $query = mysqli_query($koneksi, "SELECT * FROM pemeliharaan");	


?>

<!-- Main content -->
<section class="content">
<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-sm-12">
			 <div class="box box-primary">
                <div class="box-header with-border">
                    <h1 class="text-center">Form Service</h1>
                </div>                
                <div class="box-body">
               <div class="row">
                    <div class="col-md-2">
                        <a href="index.php?p=tambah_pemeliharaan" class=" btn btn-primary"><i class="fa fa-plus"></i> Tambah Data Service </a>  
                    </div>
                    <br><br>
                </div>                  
                	<div class="table-responsive">
                		<table class="table text-center" id="produksi_telur">
                			<thead  > 
	                			<tr>
	                				<th>No</th>
	                				<th>No Service</th>	                					            				
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
	                				<th>Catatan</th>
                                    <th>Gambar</th>
                                    <th>Status</th>
                                     
                                    <th>Aksi</th>  	                				
	                			</tr>
                			</thead>
                			<tbody>
                				<tr>
                					<?php 
                						$no =1 ;
                						if (mysqli_num_rows($query)) {
                							while($row=mysqli_fetch_assoc($query)):

                					 ?>
                						<td> <?= $no; ?> </td>
                						<td> <?= $row['no_service']; ?> </td>                                        
                						<td> <?= $row['nama_brg']; ?> </td>
                                        <td><?= $row['jumlah']; ?> </td> 
                                        <td><?= $row['catatan']; ?> </td> 
                                        <td><?php echo '<img src="../galeri/'.$row['gambar'].' "class="rounded" width="100px"> ';?></td>
                                        <td > <?php
                               if ($row['status'] == 0){
                                echo '<span class=text-warning>Belum Disetujui</span>';
                            } elseif ($row['status'] == 1) {
                                echo '<span class=text-primary>Telah Disetujui</span>';
                            } else {
                                echo '<span class=text-danger>Tidak Disetujui</span>';
                            }
                            ?>  
                                         
                                        
                                        
                						
                                         <td>
                                                               

                                            <a href="?p=hapus_pemeliharaan&aksi=hapus&id=<?= $row['no_service']; ?>"><span data-placement='top' data-toggle='tooltip' title='Hapus'><button  class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button></span></a>                    
                                        </td>              					
                				</tr>
                			<?php $no++; endwhile; } ?>
                			</tbody>
                		</table>
                	</div>                	
                </div>
            </div>
		</div>
	</div>

</section>

<script>
    $(function(){
        $("#produksi_telur").DataTable({
             "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
            "sEmptyTable": "Tidak ada data di database"
            }
        });
    });
</script> 
