<?php 
if (isset($_POST["btnSimpan"])) {
	$KODE=$_POST["kode"];
	$JUDUL=$_POST["judul"];
	$PENGARANG=$_POST["pengarang"];
	$PENERBIT=$_POST["penerbit"];


	include ("koneksi.php");
	$sql="insert into buku(kode_buku, judul_buku, pengarang, penerbit)
			values('$KODE', '$JUDUL', '$PENGARANG', '$PENERBIT')";
	$result=$koneksi->query($sql);
	$koneksi=NULL;
	header("location:buku_select.php");
} else {
	echo "Anda harus ke membuka form buku terlebih dahulu";
}



?>