<?php use_helper('I18N') ?>
<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
<div class="modal" id="login">
  <div class="modal-header">
    <h1>Login</h1>
  </div>
  <div class="modal-body">
    <div class="control-group">
      <?php echo $form['username']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['username'] ?>
        <?php echo $form['username']->renderHelp() ?>
      </div>
    </div>
    <div class="control-group">
      <?php echo $form['password']->renderLabel(null, array('class'=>'control-label')) ?>
      <div class="controls">
        <?php echo $form['password'] ?>
        <?php echo $form['password']->renderHelp() ?>
      </div>
    </div>
    <div class="control-group">
      <label class="checkbox">
        <?php echo $form['remember'] ?>
        <?php echo $form['remember']->renderHelp() ?>
      </label>
    </div>
  </div>
  <div class="modal-footer">
  	<?php echo $form->renderHiddenFields(false) ?>
    <input type="submit" class="btn btn-primary btn-large" value="<?php echo __('Login', null, 'sf_guard') ?>" />
  </div>
</div>
<?php $routes = $sf_context->getRouting()->getRoutes() ?>
          <?php if (isset($routes['sf_guard_forgot_password'])): ?>
            <a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Forgot your password?', null, 'sf_guard') ?></a>
          <?php endif; ?>

          <?php if (isset($routes['sf_guard_register'])): ?>
            &nbsp; <a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Want to register?', null, 'sf_guard') ?></a>
          <?php endif; ?>
</form>