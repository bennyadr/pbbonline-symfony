<table class="table table-striped">
  <thead>
    <tr>
      <th>No.</th>
      <th>Mandor</th>
      <th>DBKB Nonstandar</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($dbkb as $dbkb): ?>
		<?php $V=split('[|]',$dbkb->getVal()); ?>
    <tr>
      <td><a href="<?php echo url_for('dbkb/show?id='.$dbkb->getId()) ?>"><?php echo $dbkb->getId() ?></a></td>
      <td><?php echo $V[0]; ?></td>
      <td class="center">
      	<?php if($V[270]!=''){ ?>
      	  <i class="icon-ok"></i>
      	<?php }else{ ?>
      	  <i class="icon-remove"></i>
      	<?php } ?>
			</td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<header class="jumbotron">
    <p class="download-info">
      <a class="btn btn-primary btn-large" href="<?php echo url_for('dbkb/new') ?>">Tambah Baru</a>
		</p>
</header>