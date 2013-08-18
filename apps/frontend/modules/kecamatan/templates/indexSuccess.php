<header class="jumbotron subhead" id="overview">
	<h1>Daftar Kecamatan</h1>
</header>
<?php echo $count ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>No.</th>
      <th>ID</th>
      <th>Nama</th>
      <th>Kodepos</th>
      <th>Kode lokal</th>
      <th>Tanggal Input</th>
      <th>Tanggal Edit</th>
    </tr>
  </thead>
  <tbody>
    <?php
		if(!isset($_GET['page'])||$_GET['page']==''){$page=1;}else{$page=$_GET['page'];}
		$no=($page-1)*10+1;
		foreach ($kecamatans as $kecamatan): ?>
    <tr>
			<td><?php echo $no; ?></td>
      <td><a href="<?php echo url_for('kecamatan/show?id='.$kecamatan->getId().'&page='.$_GET['page']) ?>"><?php echo $kecamatan->getId() ?></a></td>
      <td><?php echo $kecamatan->getNama() ?></td>
      <td><?php echo $kecamatan->getKodepos() ?></td>
      <td><?php echo $kecamatan->getKodeLokal() ?></td>
      <td><?php echo $kecamatan->getCreatedAt() ?></td>
      <td><?php echo $kecamatan->getUpdatedAt() ?></td>
    </tr>
    <?php 
		$no++;
		endforeach; ?>
  </tbody>
</table>
<header class="jumbotron">
  <a class="btn btn-primary btn-large" href="<?php echo url_for('kecamatan/new?&page='.$_GET['page']) ?>">Tambah Baru</a>
	<?php if ($kecamatans->haveToPaginate())  { ?>
	<ul class="pager" style="float:right">
	<?php 
	echo link_to('&laquo;', 'kecamatan/index?page='.$kecamatans->getFirstPage()).'&nbsp;';
	echo link_to('&larr;', 'kecamatan/index?page='.$kecamatans->getPreviousPage()).'&nbsp;';
	/*$links = $kecamatans->getLinks();
	foreach ($links as $page){
		if($page == $kecamatans->getPage()){
			echo '<li class="active"><a>'.$page.'</a></li>';
		}else{
			echo '<li>'.link_to($page, 'kecamatan/index?page='.$page).'</li>';
		}
		if ($page != $kecamatans->getCurrentMaxLink()){}
	}*/
	echo link_to('&rarr;', 'kecamatan/index?page='.$kecamatans->getNextPage()).'&nbsp;';
	echo link_to('&raquo;', 'kecamatan/index?page='.$kecamatans->getLastPage()).'&nbsp;'; ?>
	</ul>
	<?php } ?>
	<div style="clear:both"></div>
</header>