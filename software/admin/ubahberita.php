<h2>Ubah Instansi</h2>

<?php 

$det=$ins->ambil_instansi($_GET['idb']);

foreach ($det as $d) 
{
	
	?>

	<form method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label>nama Instansi</label>
			<input type="text" name="nama" class="form-control" value="<?php echo $d['nama'];?>">
		</div>
		
		<div class="form-group">
			<label>deksripsi</label>
			<textarea class="form-control" rows="10" name="deskripsi"><?php echo $d['deskripsi'];?></textarea>
		</div>

		<button type="submit" class="btn btn-primary" name="save">Simpan</button>
	</form>
	<?php
}
?>

<?php 
if (isset($_POST['save'])) {
	$ins->ubah_instansi($_GET['idb'],$_POST['nama'],$_POST['deskripsi']);
	echo"<script>alert('berita tersimpan');</script>";
	echo"<script>window.location='index.php?halaman=berita';</script>";
}
?>