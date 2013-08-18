<header class="jumbotron subhead" id="overview">
  <h1>Daftar Permohonan</h1>
  <div class="subnav">
    <ul class="nav nav-pills">
    <?php foreach($jenis as $data): ?>
      <li><a href="<?php echo url_for('permohonan_jenis', $data) ?>"><?php echo $data ?></a></li>
    <?php endforeach; ?>
    </ul>
  </div>
</header>

<?php include_partial('permohonan/list', array('permohonan' => $permohonan)) ?>
