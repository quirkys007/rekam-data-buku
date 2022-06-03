<?php 


include("koneksi.php");
include("header.php");
 ?> 
 	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buku</h1>
        <a href="buku_insert_form.php" class="btn btn-danger">Tambah</a>
    </div>
	<table class="table table-dark">
 		<tr>
 			<td>Kode Buku</td>
 			<td>Judul Buku</td>
 			<td>Pengarang</td>
 			<td>Penerbit</td>

 		</tr>
 		<?php 
 			$qry="select * from buku";
 			$result=$koneksi-> query($qry);
 			if (isset($result)){
 			while ($row=$result-> fetch(PDO::FETCH_OBJ)) {
 		 ?>
 		<tr>
 			<td><?php echo $row->kode_buku; ?></td>
 			<td><?php echo $row->judul_buku; ?></td>
 			<td><?php echo $row->pengarang; ?></td>
 			<td><?php echo $row->penerbit; ?></td>

 			<td>
 				<a href="buku_edit_form.php?kode_buku=<?php echo $row->kode_buku; ?>" class="btn btn-warning">Edit</a>
 				<a href="buku_delete_proses.php?kode_buku=<?php echo $row->kode_buku; ?>" class="btn btn-danger">Delete</a>
 			</td>
 		<?php }} ?>
 		</tr>
 	</table>
<?php 
 ?>