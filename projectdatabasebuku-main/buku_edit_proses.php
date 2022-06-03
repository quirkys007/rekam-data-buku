<?php 
	include ("koneksi.php");
if (isset($_POST["btnSimpan"])) {
	$KODE=$_POST["id"];
	$JUDUL=$_POST["judul"];
	$PENGARANG=$_POST["pengarang"];
	$PENERBIT=$_POST["penerbit"];


	$sql="update buku set judul_buku='$JUDUL',
						pengarang='$PENGARANG',
						penerbit='$PENERBIT'
	where kode_buku = $KODE		
						";
						
	$result=$koneksi->query($sql);
	$koneksi=NULL;
	header("location:buku_select.php");
} else {
	echo "Anda harus ke membuka form edit";
}



?>