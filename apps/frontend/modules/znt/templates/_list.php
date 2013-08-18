<table class="table table-striped">
  <thead>
    <tr>
      <th>Nomor</th>
      <th>Kode</th>
      <th>NIR</th>
      <th>Dokumen</th>
      <th>Blok</th>
      <th>Tgl Input</th>
      <th>NIP Input</th>
      <th>Tgl Periksa</th>
      <th>NIP Pemeriksa</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($znt as $znt): ?>
    <tr>

      <td><a href="<?php echo url_for('znt/show?id='.$znt->getId()) ?>"><?php echo $znt->getId() ?></a></td>
      <td><?php echo $znt->getKode() ?></td>
      <td><?php echo $znt->getNir() ?></td>
      <td><?php echo $znt->getDokumenId() ?></td>
      <td><?php echo $znt->getBlokId() ?></td>
      <td><?php echo $znt->getCreatedAt() ?></td>
      <td><?php echo $znt->getNipInput() ?></td>
      <td><?php echo $znt->getTglCek() ?></td>
      <td><?php echo $znt->getNipCek() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<header class="jumbotron">
    <p class="download-info">
      <a class="btn btn-primary btn-large" href="<?php echo url_for('znt/new') ?>">Tambah Baru</a>
		</p>
</header>