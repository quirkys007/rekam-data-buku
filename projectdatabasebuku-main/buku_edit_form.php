<?php 
include ("header.php"); 
include ("koneksi.php");
$KODE=$_GET["kode_buku"];
$sql="select * from buku where kode_buku=$KODE";
$result=$koneksi->query($sql);
$koneksi=NULL;
$row=$result->fetch(PDO::FETCH_OBJ);
?>

<h1>Form Edit Buku</h1>
<form method="post" action="buku_edit_proses.php">
  
     		<input type="hidden"name="id" value="<?php echo $row->kode_buku; ?>">
    	
  
  	<div class="form-group row">
    	<label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
   		<div class="col-sm-10">
     		<input type="text" class="form-control" id="judul" name="judul" value="<?php echo $row->judul_buku; ?>">
    	</div>
  	</div>
  	<div class="form-group row">
    	<label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
   		<div class="col-sm-10">
     		<input type="text" class="form-control" id="pengarang" name="pengarang" value="<?php echo $row->pengarang; ?>">
    	</div>
  	</div>
  	<div class="form-group row">
    	<label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
   		<div class="col-sm-10">
     		<input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $row->penerbit; ?>">
    	</div>
  	</div>


  	</div>
  	<div class="form-group row">
    	<label for="tombol" class="col-sm-2 col-form-label"></label>
   		<div class="col-sm-10">
     		<input type="submit" class="btn btn-primary" name="btnSimpan" value="Simpan">
     		<input type="reset" class="btn btn-warning" name="btnReset" value="Reset">
    	</div>
  	</div>
</form>

<?php 
include ("footer.php"); 
?>