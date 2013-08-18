<header class="jumbotron subhead" id="overview">
  <h1>NJOP <?php echo $njop->getId() ?></h1>
</header>
<table class="show table table-striped">  <tbody>
    <tr>
      <th>Jenis:</th>
      <td><?php echo $njop->getJenis() ?></td>
    </tr>
    <tr>
      <th>Kelas:</th>
      <td><?php echo $njop->getKelas() ?></td>
    </tr>
    <tr>
      <th>Batas atas:</th>
      <td><?php echo $njop->getBatasAtas() ?></td>
    </tr>
    <tr>
      <th>Batas bawah:</th>
      <td><?php echo $njop->getBatasBawah() ?></td>
    </tr>
    <tr>
      <th>Nilai:</th>
      <td><?php echo $njop->getNilai() ?></td>
    </tr>
    <tr>
      <th>Tanggal Input:</th>
      <td><?php echo $njop->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Tanggal Edit:</th>
      <td><?php echo $njop->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>
<div class="action">
  <a class="btn" href="<?php echo url_for('njop/index?page='.$_GET['page'])?>">Kembali</a> 
  <a class="btn btn-primary" href="<?php echo url_for('njop/edit?id='.$njop->getId().'&page='.$_GET['page']) ?>">Edit</a>
  <?php echo link_to('Hapus', 'njop/delete?id='.$njop->getId().'&page='.$_GET['page'], array('method' => 'delete', 'confirm' => 'Yakin ?', 'class' => 'btn btn-danger')) ?>
</div>