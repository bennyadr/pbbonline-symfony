<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('jalan/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> class="form-horizontal">
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>  
  
  <fieldset>
		<div class="control-group">
      <?php echo $form['nama']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['nama'] ?>
        <?php echo $form['nama']->renderHelp() ?>
      </div>
		</div>
  </fieldset>
	<div class="form-actions">
		<a class="btn" href="<?php if($id=$form->getObject()->getId()){
		echo url_for('jalan/show?id='.$id.'&page='.$_GET['page']); }else{
		echo url_for('jalan/index?page='.$_GET['page']); }
		?>">Batal</a>
    <?php echo $form->renderHiddenFields(false) ?>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
</form>
