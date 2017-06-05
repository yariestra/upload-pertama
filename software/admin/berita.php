<?php 

if (isset($_GET['aksi'])) {
	if ($_GET['aksi']=='hapus') {
		$ins->hapus_instansi($_GET['idnya']);
		echo"<script>alert('terhapus');</script>";
		echo"<script>window.alert='index.php?halaman=berita';</script>";
	}
}

 ?>

<h2>Data Instansi</h2>
<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Aksi</th>
			<th>Instansi</th>
			<th>Deskrispi</th>
			
		</tr>
	</thead>
	<tbody>
	<?php 
	$no=1;
	$inc=$ins->tampil_instansi();
	foreach ($inc as $d) {
	
	 ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td>
			<a href="index.php?halaman=ubahberita&idb=<?php echo $d['id'];?>" class="btn btn-info"><i class="fa fa-remove"></i> Edit</a>
			<a href="index.php?halaman=berita&aksi=hapus&idnya=<?php echo $d['id'];?>" class="btn btn-danger"><i class="fa fa-edit"></i>Hapus</a>
			</td>
			<td><?php echo $d['nama']?></td>
			<td><?php echo $d['deskripsi'];?></td>
			
		</tr>
	<?php
	$no++;
	}
	?>
	</tbody>
</table>
<a href="index.php?halaman=tambahberita" class="btn btn-primary">Tambah Instansi</a>