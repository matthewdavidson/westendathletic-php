<?php $this->load->view('common/header'); ?>

<div class="page-header">
  <h1>Login</h1>
</div>

<div class="row">

  <div class="span6">

  <?php echo form_open('admin/session/create_session', array('class' => 'well')); ?>

    <div class="control-group">
      <?php echo form_input(array('name' => 'username', 'value' => $session['username'], 'placeholder' => 'Username')); ?>
    </div>

    <div class="control-group">
      <?php echo form_input(array('name' => 'password', 'value' => $session['password'], 'placeholder' => 'Password')); ?>
    </div>

    <?php echo form_input(array('type' => 'submit', 'value' => 'Login', 'class' => 'btn btn-primary')); ?>
    <?php echo anchor('/', 'Back', 'class="btn"'); ?>

  <?php echo form_close(); ?>

  </div>

  <div class="span6">
    <!-- Extra content here... -->
  </div>

</div>

<?php $this->load->view('common/footer'); ?>