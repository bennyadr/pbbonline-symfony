<header class="jumbotron subhead" id="overview">
  <h1>Kelurahan <?php echo $kelurahan->getId() ?></h1>
</header>
<table class="show table table-striped">  <tbody>
    <tr>
      <th>Nama:</th>
      <td><?php echo $kelurahan->getNama() ?></td>
    </tr>
    <tr>
      <th>Kecamatan:</th>
      <td><?php echo $kelurahan->getKecamatanId() ?></td>
    </tr>
    <tr>
      <th>Kode lokal:</th>
      <td><?php echo $kelurahan->getKodeLokal() ?></td>
    </tr>
    <tr>
      <th>Tanggal Input:</th>
      <td><?php echo $kelurahan->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Tanggal Edit:</th>
      <td><?php echo $kelurahan->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr class="soften no-margin">

<div class="action">
  <a class="btn" href="<?php echo url_for('kelurahan/index?page='.$_GET['page'])?>">Kembali</a> 
  <a class="btn btn-primary" href="<?php echo url_for('kelurahan/edit?id='.$kelurahan->getId().'&page='.$_GET['page']) ?>">Edit</a>
  <?php echo link_to('Hapus', 'kelurahan/delete?id='.$kelurahan->getId().'&page='.$_GET['page'], array('method' => 'delete', 'confirm' => 'Yakin ?', 'class' => 'btn btn-danger')) ?>
</div>