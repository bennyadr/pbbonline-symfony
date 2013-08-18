<header class="jumbotron subhead" id="overview">
  <h1>Jalan No.<?php echo $jalan->getId() ?></h1>
</header>
<table class="show table table-striped">  <tbody>
    <tr>
      <th>Nama:</th>
      <td><?php echo $jalan->getNama() ?></td>
    </tr>
    <tr>
      <th>Tanggal Input:</th>
      <td><?php echo $jalan->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Tanggal Edit:</th>
      <td><?php echo $jalan->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr class="soften no-margin">

<div class="action">
  <a class="btn" href="<?php echo url_for('jalan/index?page='.$_GET['page'])?>">Kembali</a> 
  <a class="btn btn-primary" href="<?php echo url_for('jalan/edit?id='.$jalan->getId().'page='.$_GET['page']) ?>">Edit</a>
  <?php echo link_to('Hapus', 'jalan/delete?id='.$jalan->getId().'&page='.$_GET['page'], array('method' => 'delete', 'confirm' => 'Yakin ?', 'class' => 'btn btn-danger')) ?>
</div>