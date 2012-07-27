<?php $this->load->view('common/header'); ?>

<div class="page-header">
  <h1>User Management</h1>
</div>

<div class="row">

  <div class="span8">
  	<div class="bordered">
  		<h2>New User</h2>
      <?php echo form_open('admin/users/create', array('class' => 'form-horizontal well')); ?>
        <?php $this->load->view('admin/users/form_fields'); ?>
      <?php echo form_close(); ?>
    </div>
  </div>

  <div class="span4">
    <h2>Sidebar</h2>
  </div>

</div>