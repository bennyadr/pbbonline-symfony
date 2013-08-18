<header class="jumbotron subhead" id="overview">
  <h1>Daftar <?php echo $jenis ?></h1>
  <div class="subnav">
    <ul class="nav nav-pills">
    <?php foreach($jenis_permohonan as $data): ?>
      <?php if($jenis->getId() == $data->getId()): ?>
        <?php $active = 'active' ?>
      <?php else: ?>
        <?php $active = null ?>
      <?php endif; ?>
      <li class="<?php echo $active ?>">
      	<a href="<?php echo url_for('permohonan_jenis', $data) ?>"><?php echo $data ?></a>
      </li>
    <?php endforeach; ?>
    </ul>
  </div>
  <?php include_partial('permohonan/list', array('permohonan' => $jenis->Permohonan)) ?>
</header>