<?php use_helper('Text') ?>
<header class="jumbotron subhead" id="overview">
  <h1>ZNT No.<?php echo $znt->getId() ?></h1>
</header>
<table class="show table table-striped">
  <tbody>
    <tr>
      <th>Kode:</th>
      <td><?php echo $znt->getKode() ?></td>
    </tr>
    <tr>
      <th>NIR:</th>
      <td><?php echo $znt->getNir() ?></td>
    </tr>
    <tr>
      <th>Dokumen:</th>
      <td><?php echo $znt->getDokumenId() ?></td>
    </tr>
    <tr>
      <th>Blok:</th>
      <td><?php echo $znt->getBlokId() ?></td>
    </tr>
    <tr>
      <th>Input:</th>
      <td>
				NIP: <?php echo $znt->getNipInput() ?><br/>
				Tanggal: <?php echo $znt->getCreatedAt() ?>
			</td>
    </tr>
    <tr>
      <th>Edit:</th>
      <td>
				NIP: <?php //echo $znt->getNipEdit() ?><br/>
				Tanggal: <?php echo $znt->getUpdatedAt() ?>
			</td>
    </tr>
    <tr>
      <th>Periksa:</th>
      <td>
				NIP: <?php echo $znt->getNipCek() ?><br/>
				Tanggal: <?php echo $znt->getTglCek() ?>
			</td>
    </tr>
  </tbody>
</table>

<hr class="soften no-margin">

<div class="action">
  <!--div class="pull-right"-->
    <a class="btn" href="<?php echo url_for('znt/index')?>">
	  Kembali
		</a> 
		<a class="btn btn-primary" href="<?php echo url_for('znt_edit', $znt) ?>">
			Ubah
		</a> 
  <!--/div-->
  <?php echo link_to('Hapus', 'znt/delete?id='.$znt->getId(), array('method' => 'delete', 'confirm' => 'Yakin ?', 'class' => 'btn btn-danger')) ?>
</div>