<?php 
include ("header.php"); 
?>

<form method="post" action="buku_insert_proses.php">
	<div class="form-group row">
    	<label for="kode" class="col-sm-2 col-form-label">Kode</label>
   		<div class="col-sm-10">
     		<input type="text" class="form-control" id="kode" name="kode">
    	</div>
  	</div>
  	<div class="form-group row">
    	<label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
   		<div class="col-sm-10">
     		<input type="text" class="form-control" id="judul" name="judul">
    	</div>
  	</div>
  	<div class="form-group row">
    	<label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
   		<div class="col-sm-10">
     		<input type="text" class="form-control" id="pengarang" name="pengarang">
    	</div>
  	</div>
  	<div class="form-group row">
    	<label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
   		<div class="col-sm-10">
     		<input type="text" class="form-control" id="penerbit" name="penerbit">
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