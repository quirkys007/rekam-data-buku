<?php 
include("koneksi.php");
include("header.php");
 ?> 
 	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kategori</h1>
        <a href="buku_insert_form.php" class="btn btn-danger">Tambah</a>
    </div>
	<table class="table table-dark">
 		<tr>
 			<td>No.</td>
 			<td>Kategori</td>
 			<td>Aktif</td>
 			<td>Keterangan</td>
 			<td>Aksi</td>
 		</tr>
 		<?php 
 			$qry="select * from kategori";
 			$result=$koneksi-> query($qry);
 			if (isset($result)){
 				$no=1;
 			while ($row=$result-> fetch(PDO::FETCH_OBJ)) {
 		 ?>
 		<tr>
 			<td><?php echo $no ?></td>
 			<td><?php echo $row->kategori; ?></td>
 			<td>
 				<?php
 				if ($row -> aktif==1) {
 				  	echo "Aktif";
 				  } else {
 				  	echo "Tidak Aktif";
 				  } ?>
 			</td>
 			<td><?php echo $row->keterangan; ?></td>
 			<td>
 				<a href="" class="btn btn-warning">Edit</a>
 				<a href="" class="btn btn-danger">Delete</a>
 			</td>
 		<?php $no++; }} ?>
 		</tr>
 	</table>
<?php 
include("footer.php") ?>