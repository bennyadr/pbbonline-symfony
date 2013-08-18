<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Penggunaan Bangunan</th>
      <th>Nilai sistem</th>
      <th>Nilai individu</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($lspop as $lspop): ?>
    <tr>
      <td><a href="<?php echo url_for('lspop/show?id='.$lspop->getId()) ?>"><?php echo $lspop->getId() ?></a></td>
      <script>
        all='<?php echo $lspop->getVal() ?>';
        arr=all.split('|');
        document.write('<td>'+arr[0]+'</td><td>'+arr[arr.length-2]+'</td><td>'+arr[arr.length-1]+'</td>');
      </script>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<header class="jumbotron">
    <p class="download-info">
      <a class="btn btn-primary btn-large" href="<?php echo url_for('lspop/new') ?>">Tambah Baru</a>
		</p>
</header>