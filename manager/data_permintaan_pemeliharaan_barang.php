<?php  
include "../fungsi/koneksi.php";
include "../fungsi/fungsi.php";

	if (isset($_GET['aksi']) && isset($_GET['tgl'])) {
		//die($id = $_GET['id']);
		$tgl = $_GET['tgl'];
		echo $tgl;

		if ($_GET['aksi'] == 'detil') {
			header("location:?p=detil_pemeliharaan&tgl=$tgl");
		} 
	}
$query = mysqli_query($koneksi, "SELECT * FROM pemeliharaan");	   
?>
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm-12">
         <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="text-center">Data Permintaan Pemeliharaan Barang</h3>
            </div>                

            <div class="box-body"> 
                <div class="table-responsive">
                    <table id="datapesanan" class="table text-center">
                        <thead  > 
                            <tr>
                             	<th>No</th>
	                				<th>No Service</th>	                					            				
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
	                				<th>Catatan</th>
                                    <th>Gambar</th>
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
                                     <td>                                                                                                                                          
                                    <a href="?p=detil_pemeliharaan&unit=<?= $row['unit'];?>&tgl=<?= $row['tgl_pemeliharaan']; ?>"><span data-placement='top' data-toggle='tooltip' title='Detail Pemeliharaan'><button    class="btn btn-info">Detail Barang</button></span></a>                                                           
                                              
                                        
                                    </td>                                                                                            
                                </tr>
                                <?php $no++; endwhile; }else {echo "<tr><td colspan=9>Tidak ada permintaan barang.</td></tr>";} ?>
                            </tbody>
                        </table>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
</section>




