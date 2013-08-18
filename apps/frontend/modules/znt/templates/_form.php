<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<?php echo form_tag_for($form, '@znt', array('class'=>'form-horizontal')) ?>
	<fieldset>
		<?php if (!$form->getObject()->isNew()): ?>
		<input type="hidden" name="sf_method" value="put" />
		<?php endif; ?>
		
		<div class="control-group">
      <?php echo $form['kode']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['kode'] ?>
        <?php echo $form['kode']->renderHelp() ?>
      </div>
		</div>
		<div class="control-group">
      <?php echo $form['nir']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['nir'] ?>
        <?php echo $form['nir']->renderHelp() ?>
      </div>
		</div>
		<div class="control-group">
      <?php echo $form['blok_id']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['blok_id'] ?>
        <?php echo $form['blok_id']->renderHelp() ?>
      </div>
		</div>
		<div class="control-group">
      <?php echo $form['dokumen_id']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['dokumen_id'] ?>
        <?php echo $form['dokumen_id']->renderHelp() ?>
      </div>
		</div>

		<!--div class="control-group">
      <?php // echo $form['tgl_cek']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php // echo $form['tgl_cek'] ?>
        <?php // echo $form['tgl_cek']->renderHelp() ?>
      </div>
		</div>
		<div class="control-group">
      <?php // echo $form['nip_input']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php // echo $form['nip_input'] ?>
        <?php // echo $form['nip_input']->renderHelp() ?>
      </div>
		</div>
		<div class="control-group">
      <?php // echo $form['nip_cek']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php // echo $form['nip_cek'] ?>
        <?php // echo $form['nip_cek']->renderHelp() ?>
      </div>
		</div>
		<div class="control-group">
      <?php // echo $form['valid']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php // echo $form['valid'] ?>
        <?php // echo $form['valid']->renderHelp() ?>
      </div>
		</div-->
		
		<?php //echo $form; ?>
	</fieldset>
	<div class="form-actions">
		<a class="btn" href="<?php if($id=$form->getObject()->getId()){
		echo url_for('znt/show?id='.$id); }else{
		echo url_for('znt/index'); }
		?>">Batal</a>
    <?php echo $form->renderHiddenFields(false) ?>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
</form>