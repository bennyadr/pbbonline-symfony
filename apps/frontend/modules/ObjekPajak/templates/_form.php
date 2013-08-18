<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
 
<?php echo form_tag_for($form, '@objek_pajak', array('class'=>'form-horizontal')) ?>
  <fieldset>
    <legend>Menu Name</legend>
    <div class="control-group">
      <?php echo $form['nopersil']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['nopersil'] ?>
        <?php echo $form['nopersil']->renderHelp() ?>
      </div>
    </div>
    <div class="control-group">
      <?php echo $form['blokkavno']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['blokkavno'] ?>
        <?php echo $form['blokkavno']->renderHelp() ?>
      </div>
    </div>
    <div class="control-group">
      <?php echo $form['rwrt']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['rwrt'] ?>
        <?php echo $form['rwrt']->renderHelp() ?>
      </div>
    </div>
    <div class="control-group">
      <?php echo $form['jalan']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['jalan'] ?>
        <?php echo $form['jalan']->renderHelp() ?>
      </div>
    </div>
    <div class="control-group">
      <?php echo $form['cabang']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['cabang'] ?>
        <?php echo $form['cabang']->renderHelp() ?>
      </div>
    </div>
    <div class="control-group">
      <?php echo $form['luastanah']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['luastanah'] ?>
        <?php echo $form['luastanah']->renderHelp() ?>
      </div>
    </div>
    <div class="control-group">
      <?php echo $form['kodeznt_id']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['kodeznt_id'] ?>
        <?php echo $form['kodeznt_id']->renderHelp() ?>
      </div>
    </div>
    <div class="form-actions">
      <?php echo $form->renderHiddenFields(false) ?>
      <button type="submit" class="btn btn-primary">Save changes</button>
      <button class="btn" url="<?php echo url_for('objek_pajak') ?>">Cancel</button>
    </div>
  </fieldset>
</form>