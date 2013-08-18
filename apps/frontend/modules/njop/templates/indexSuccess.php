<header class="jumbotron subhead" id="overview">
	<h1>Daftar NJOP</h1>
</header>

<table class="table table-striped">
  <thead>
    <tr>
      <th>No.</th>
      <th>ID</th>
      <th>Jenis</th>
      <th>Kelas</th>
      <th>Batas atas</th>
      <th>Batas bawah</th>
      <th>Nilai</th>
      <th>Tanggal Input</th>
      <th>Tanggal Edit</th>
    </tr>
  </thead>
  <tbody>
    <?php
		if(!isset($_GET['page'])||$_GET['page']==''){$page=1;}else{$page=$_GET['page'];}
		$no=($page-1)*10+1;
		foreach ($njops as $njop): ?>
    <tr>
			<td><?php echo $no; ?></td>
      <td><a href="<?php echo url_for('njop/show?id='.$njop->getId().'&page='.$_GET['page']) ?>"><?php echo $njop->getId() ?></a></td>
      <td><?php echo $njop->getJenis() ?></td>
      <td><?php echo $njop->getKelas() ?></td>
      <td><?php echo $njop->getBatasAtas() ?></td>
      <td><?php echo $njop->getBatasBawah() ?></td>
      <td><?php echo $njop->getNilai() ?></td>
      <td><?php echo $njop->getCreatedAt() ?></td>
      <td><?php echo $njop->getUpdatedAt(); $no++; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<header class="jumbotron">
  <a class="btn btn-primary btn-large" href="<?php echo url_for('njop/new') ?>">Tambah Baru</a>
	<?php if ($njops->haveToPaginate())  { ?>
		<ul class="pager" style="float:right">
			<?php 
			echo link_to('&laquo;', 'njop/index?page='.$njops->getFirstPage()).'&nbsp;';
			 echo link_to('&larr;', 'njop/index?page='.$njops->getPreviousPage()).'&nbsp;';
			 echo link_to('&rarr;', 'njop/index?page='.$njops->getNextPage()).'&nbsp;';
			echo link_to('&raquo;', 'njop/index?page='.$njops->getLastPage()).'&nbsp;'; ?>
		</ul>
	<?php } ?>
	<div style="clear:both"></div>

</header>