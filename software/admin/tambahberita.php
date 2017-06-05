<h2>Tambah Instansi</h2>
<form method="POST" enctype="multipart/form-data">
<div class="form-group">
	<label>nama Instansi</label>
	<input type="text" name="nama" class="form-control">
</div>
<div class="form-group">
	<label>Deskrispi</label>
	<textarea class="form-control" rows="10" name="deskripsi"></textarea>
</div>

<button type="submit" class="btn btn-primary" name="save">Simpan</button>
</form>

<?php 
if (isset($_POST['save'])) {
	$ins->simpan_instansi($_POST['nama'],$_POST['deskripsi']);
	echo"<script>alert('Instansi tersimpan');</script>";
	echo"<script>window.location='index.php?halaman=berita';</script>";
}
 ?>