<?php 

echo $_GET["kode_buku"];

if (isset($_GET["kode_buku"])) {
	$KODE=$_GET["kode_buku"];
	include("koneksi.php");
	$sql="delete from buku where kode_buku=$KODE";
	$result=$koneksi->query($sql);
	$koneksi=NULL;
	header("location:buku_select.php");
} else {
	echo "Anda harus buka data buku";
}

?>