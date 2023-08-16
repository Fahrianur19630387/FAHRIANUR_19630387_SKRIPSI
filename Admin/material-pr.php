<?php  
      include "../fungsi/koneksi.php";
      if (isset($_GET['aksi']) && isset($_GET['id'])) {
        //die($id = $_GET['id']);
        $id = $_GET['id'];        

        if ($_GET['aksi'] == 'edit') {
            header("location:?p=edit-produksi&id=$id");
        } else if ($_GET['aksi'] == 'hapus') {
            header("location:?p=hapusproduksi&id=$id");
        } 
    }
	
	//$query = mysqli_query($koneksi, "SELECT * FROM produksi WHERE level!='manager' AND level!='upengadaan' ORDER BY level DESC");	
    $query = mysqli_query($koneksi, "SELECT * FROM produksi");	

?>

<!-- Main content -->
<section class="content">
<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-sm-12">
			 <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="text-center">Olah Data Produksi</h3>
                </div>                
                <div class="box-body">
               <div class="row">
                    <div class="col-md-2">
                        <a href="index.php?p=tambahproduksi" class=" btn btn-primary"><i class="fa fa-plus"></i> Tambah Data Produksi</a> 
                    </div>
                    <br><br>
                </div>                  
                	<div class="table-responsive">
                		<table class="table text-center" id="produksi">
                			<thead  > 
	                			<tr>
	                				<th>No</th>
	                				<th>Kode</th>	                					                				
                                    <th>Kandang</th>
                                    <th>Jumlah</th>
	                				<th>Grade A ( 53 gr - 79 gr)</th>
                                    <th>Grade B ( 45 gr - 52 gr )</th>
                                    <th>Komersil ( >45 gr, retak, >80 gr)</th>              				
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
                						<td> <?= $row['kode']; ?> </td>                                        
                						<td> <?= $row['kandang']; ?> </td>
                                        <td> <?= $row['jumlah']; ?> </td>
                                        <td> <?= $row['grade_a']; ?> </td>
                                        <td> <?= $row['grade_b']; ?> </td>
                                        <td> <?= $row['komersil']; ?> </td>
                                        
                                        
                						
                                         <td>
                                            <a href="?p=edit-produksi&aksi=edit&id=<?= $row['kode']; ?>"><span data-placement='top' data-toggle='tooltip' title='Edit'><button  class="btn btn-info">Edit</button></span></a>   
                                           
                                            <a href="?p=material-pr&aksi=hapuspr&id=<?= $row['kode']; ?>"><span data-placement='top' data-toggle='tooltip' title='Hapus'><button  class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button></span></a>                    
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
        $("#produksi").DataTable({
             "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
            "sEmptyTable": "Tidak ada data di database"
            }
        });
    });
</script> 
