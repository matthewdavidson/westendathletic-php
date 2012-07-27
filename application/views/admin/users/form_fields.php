<fieldset>

  <div class="control-group <?php if($user->error->username) { echo 'error'; } ?>">
    <?php echo form_label('Username', 'username', array('class' => 'control-label')); ?>
    <div class="controls">
      <?php echo form_input('username', $user->username); ?>
      <span class="help-inline"><?php echo $user->error->username; ?></span>
    </div>
  </div>

  <div class="control-group <?php if($user->error->password_hash) { echo 'error'; } ?>">
    <?php echo form_label('Password', 'password_hash', array('class' => 'control-label')); ?>
    <div class="controls">
      <?php echo form_password('password_hash', $user->password_hash); ?>
      <span class="help-inline"><?php echo $user->error->password_hash; ?></span>
    </div>
  </div>

  <div class="control-group <?php if($user->error->confirm_password_hash) { echo 'error'; } ?>">
    <?php echo form_label('Confirm password', 'confirm_password_hash', array('class' => 'control-label')); ?>
    <div class="controls">
      <?php echo form_password('confirm_password_hash', $user->confirm_password_hash); ?>
      <span class="help-inline"><?php echo $user->error->confirm_password_hash; ?></span>
    </div>
  </div>

  <div class="form-actions">
    <?php echo form_input(array('type' => 'submit', 'value' => 'Save User', 'class' => 'btn btn-primary')); ?>
    <?php echo anchor('/admin/users', 'Cancel', 'class="btn"'); ?>
  </div>

</fieldset>