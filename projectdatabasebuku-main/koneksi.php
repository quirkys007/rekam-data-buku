<?php 

$dsn="mysql:host=localhost;dbname=dbtokobuku";
$koneksi=new PDO($dsn, "root", "");

if (!$koneksi) {
	echo "Gagal terkoneksi dengan database";
	exit();
}
 ?>