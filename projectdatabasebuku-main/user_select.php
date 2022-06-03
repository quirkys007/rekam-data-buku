<?php 
session_start();
if (isset($_SESSION['username'])) {
include("koneksi.php");
include("header.php");
 ?> 
 	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User</h1>
        <a href="buku_insert_form.php" class="btn btn-danger">Tambah</a>
    </div>
	<table class="table table-dark">
 		<tr>
 			<td>Username</td>
 			<td>Aktif</td>
 			<td>Aksi</td>
 		</tr>
 		<?php 
 			$qry="select * from tuser";
 			$result=$koneksi-> query($qry);
 			if (isset($result)){
 			while ($row=$result-> fetch(PDO::FETCH_OBJ)) {
 		 ?>
 		<tr>
 			<td><?php echo $row->username; ?></td>
 			<td><?php echo $row->aktif; ?></td> 			
 			<td>
 				<a href="buku_edit_form.php?kode_buku=<?php echo $row->kode_buku; ?>" class="btn btn-warning">Edit</a>
 				<a href="buku_delete_proses.php?kode_buku=<?php echo $row->kode_buku; ?>" class="btn btn-danger">Delete</a>
 			</td>
 		<?php }} ?>
 		</tr>
 	</table>
<?php 
include("footer.php");
}
else {
	echo "Anda tidak berhak membuka halaman ini";
} ?>