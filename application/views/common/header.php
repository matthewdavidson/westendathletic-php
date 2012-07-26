<?php echo doctype('html5'); ?>
<html lang="en">

<head>
  <title>West End Athletic</title>
  <?php echo link_tag(site_url('assets/css/bootstrap.min.css')); ?>
  <?php echo link_tag(site_url('assets/css/application.css')); ?>
  <script src="<?php echo site_url('assets/js/jquery.min.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
</head>

<body>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">

      <?php echo anchor('/', 'West End Athletic', 'class="brand"'); ?>

			<ul class="nav pull-right">

        <?php if (is_valid_session($this->session->userdata('user_id'))) { ?>

        <li class="dropdown">

          <?php echo anchor('#', 'Admin <b class="caret"></b>', 'class="dropdown-toggle" data-toggle="dropdown"'); ?>

          <ul class="dropdown-menu">
            <li><?php echo anchor('/admin/users', 'Users'); ?></li>
            <li><?php echo anchor('/admin/teams', 'Teams'); ?></li>
            <li><?php echo anchor('/admin/competitions', 'Competitions'); ?></li>
          </ul>
          
        </li>

        <li><?php echo anchor('/admin/sessions/destroy_session', 'Logout'); ?></li>

        <?php } else { ?>

        <li><?php echo anchor('/admin/sessions/new_session', 'Login'); ?></li>

        <?php } ?>

			</ul>

		</div>
	</div>
</div>

<div class="container">

<?php $this->load->view('common/alerts'); ?>