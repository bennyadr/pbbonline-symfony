<header class="jumbotron subhead" id="overview">
  <h1>Kecamatan <?php echo $kecamatan->getId() ?></h1>
</header>
<table class="show table table-striped">  <tbody>
  <tbody>
    <tr>
      <th>Nama:</th>
      <td><?php echo $kecamatan->getNama() ?></td>
    </tr>
    <tr>
      <th>Kodepos:</th>
      <td><?php echo $kecamatan->getKodepos() ?></td>
    </tr>
    <tr>
      <th>Kode lokal:</th>
      <td><?php echo $kecamatan->getKodeLokal() ?></td>
    </tr>
    <tr>
      <th>Tanggal Input:</th>
      <td><?php echo $kecamatan->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Tanggal Edit:</th>
      <td><?php echo $kecamatan->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr class="soften no-margin">

<div class="action">
  <a class="btn" href="<?php echo url_for('kecamatan/index?page='.$_GET['page'])?>">Kembali</a> 
  <a class="btn btn-primary" href="<?php echo url_for('kecamatan/edit?id='.$kecamatan->getId().'&page='.$_GET['page']) ?>">Edit</a>
  <!--a class="btn btn-primary" href="<?php echo url_for('kecamatan_edit', $kecamatan) ?>">Edit</a--> 
  <?php echo link_to('Hapus', 'kecamatan/delete?id='.$kecamatan->getId(), array('method' => 'delete', 'confirm' => 'Yakin ?', 'class' => 'btn btn-danger')) ?>
</div>