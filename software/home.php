<?php 

$ber=$berita->tampil_berita_depan();
foreach ($ber as $ita) 
{
	
 ?>

<div class="article">

	<h5 class="head">in recent news</h5>
	<h6>Software </h6>
	<a class="title" href="single.html"><?php echo $ita['judul'];?></a>
	<a href="single.html"><img src="admin/foto_berita/<?php echo $ita['gambar'];?>" "alt="" /></a>
	<p><?php echo $ita['isi'];?></p>
</div>

<?php
}
?>

<?php 

$cuk=str_replace(' ', '', 'ha ha');
echo $cuk;
 ?>