<header class="jumbotron subhead" id="overview">
	<h1>Daftar Kelurahan</h1>
</header>

<table class="table table-striped">
  <thead>
    <tr>
      <th>No.</th>
      <th>ID</th>
      <th>Nama</th>
      <th>Kecamatan</th>
      <th>Kode lokal</th>
      <th>Tanggal Input</th>
      <th>Tanggal Edit</th>
    </tr>
  </thead>
  <tbody>
    <?php
		if(!isset($_GET['page'])||$_GET['page']==''){$page=1;}else{$page=$_GET['page'];}
		$no=($page-1)*10+1;
		foreach ($kelurahans as $kelurahan): ?>
    <tr>
			<td><?php echo $no; ?></td>
      <td><a href="<?php echo url_for('kelurahan/show?id='.$kelurahan->getId().'&page='.$_GET['page']) ?>"><?php echo $kelurahan->getId() ?></a></td>
      <td><?php echo $kelurahan->getNama() ?></td>
      <td><?php echo $kelurahan->getKecamatanId() ?></td>
      <td><?php echo $kelurahan->getKodeLokal() ?></td>
      <td><?php echo $kelurahan->getCreatedAt() ?></td>
      <td><?php echo $kelurahan->getUpdatedAt(); $no++; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<header class="jumbotron">
  <a class="btn btn-primary btn-large" href="<?php echo url_for('kelurahan/new?page='.$_GET['page']) ?>">Tambah Baru</a>
	<?php if ($kelurahans->haveToPaginate())  { ?>
		<ul class="pager" style="float:right">
			<?php 
			echo link_to('&laquo;', 'kelurahan/index?page='.$kelurahans->getFirstPage()).'&nbsp;';
			 echo link_to('&larr;', 'kelurahan/index?page='.$kelurahans->getPreviousPage()).'&nbsp;';
			 echo link_to('&rarr;', 'kelurahan/index?page='.$kelurahans->getNextPage()).'&nbsp;';
			echo link_to('&raquo;', 'kelurahan/index?page='.$kelurahans->getLastPage()).'&nbsp;'; ?>
		</ul>
	<?php } ?>
	<div style="clear:both"></div>
</header>