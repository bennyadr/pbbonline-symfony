<header class="jumbotron subhead" id="overview">
	<h1>Daftar Jalan</h1>
</header>

<table class="table table-striped">
  <thead>
    <tr>
      <th>No.</th>
      <th>ID</th>
      <th>Nama Jalan</th>
      <th>Tanggal Input</th>
      <th>Tanggal Edit</th>
    </tr>
  </thead>
  <tbody>
    <?php
		if(!isset($_GET['page'])||$_GET['page']==''){$page=1;}else{$page=$_GET['page'];}
		$no=($page-1)*10+1;
		foreach ($jalans as $jalan): ?>
    <tr>
			<td><?php echo $no;$no++; ?></td>
      <td><a href="<?php echo url_for('jalan/show?id='.$jalan->getId().'&page='.$_GET['page']) ?>"><?php echo $jalan->getId() ?></a></td>
      <td><?php echo $jalan->getNama() ?></td>
      <td><?php echo $jalan->getCreatedAt() ?></td>
      <td><?php echo $jalan->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<header class="jumbotron">
  <a class="btn btn-primary btn-large" href="<?php echo url_for('jalan/new') ?>">Tambah Baru</a>
	<?php if ($jalans->haveToPaginate())  { ?>
		<ul class="pager" style="float:right">
			<?php 
			echo link_to('&laquo;', 'jalan/index?page='.$jalans->getFirstPage()).'&nbsp;';
			 echo link_to('&larr;', 'jalan/index?page='.$jalans->getPreviousPage()).'&nbsp;';
			 echo link_to('&rarr;', 'jalan/index?page='.$jalans->getNextPage()).'&nbsp;';
			echo link_to('&raquo;', 'jalan/index?page='.$jalans->getLastPage()).'&nbsp;'; ?>
		</ul>
	<?php } ?>
	<div style="clear:both"></div>
</header>