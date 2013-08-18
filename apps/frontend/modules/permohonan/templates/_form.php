<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
 
<?php echo form_tag_for($form, '@permohonan', array('class'=>'form-horizontal')) ?>
  <fieldset>
    <legend>Informasi Permohonan</legend>
    <div class="control-group">
      <?php echo $form['nomor']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['nomor'] ?>
        <?php echo $form['nomor']->renderHelp() ?>
      </div>
    </div>
    <div class="control-group">
      <?php echo $form['jenis_surat']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['jenis_surat'] ?>
        <?php echo $form['jenis_surat']->renderHelp() ?>
      </div>
    </div>
    <div class="control-group">
      <?php echo $form['jenis_pelayanan_id']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['jenis_pelayanan_id'] ?>
        <?php echo $form['jenis_pelayanan_id']->renderHelp() ?>
      </div>
    </div>
    <div class="control-group">
      <?php echo $form['nop_id']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['nop_id'] ?>
        <?php echo $form['nop_id']->renderHelp() ?>
      </div>
    </div>
    <div class="control-group">
      <?php echo $form['tahun_pajak']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['tahun_pajak'] ?>
        <?php echo $form['tahun_pajak']->renderHelp() ?>
      </div>
    </div>
    <div class="control-group">
      <?php echo $form['no_surat']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['no_surat'] ?>
        <?php echo $form['no_surat']->renderHelp() ?>
      </div>
    </div>
    <div class="control-group">
      <?php echo $form['isi_surat']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['isi_surat'] ?>
        <?php echo $form['isi_surat']->renderHelp() ?>
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend>Lampiran</legend>
    <div class="control-group">
      <?php echo $form['lampiran_surat_kuasa']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['lampiran_surat_kuasa'] ?>
        <?php echo $form['lampiran_surat_kuasa']->renderHelp() ?>
      </div>
    </div>
    <div class="control-group">
      <?php echo $form['lampiran_fotokopi_ktp']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['lampiran_fotokopi_ktp'] ?>
        <?php echo $form['lampiran_fotokopi_ktp']->renderHelp() ?>
      </div>
    </div>
    <div class="control-group">
      <?php echo $form['lampiran_fotokopi_sertifikat']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['lampiran_fotokopi_sertifikat'] ?>
        <?php echo $form['lampiran_fotokopi_sertifikat']->renderHelp() ?>
      </div>
    </div>
    <div class="control-group">
      <?php echo $form['lampiran_fotokopi_imb']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['lampiran_fotokopi_imb'] ?>
        <?php echo $form['lampiran_fotokopi_imb']->renderHelp() ?>
      </div>
    </div>
  </fieldset>
	<div class="clear"></div>
  <div class="form-actions">
      <?php echo $form->renderHiddenFields(false) ?>
      <a class="btn" href="<?php echo url_for('permohonan') ?>">Cancel</a>
      <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</form>