<?php echo doctype('html5'); ?>
<html lang="en">

<head>
  <title>West End Athletic</title>
  <?php echo link_tag(site_url('assets/css/bootstrap.min.css')); ?>
  <?php echo link_tag(site_url('assets/css/application.css')); ?>
  <script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
</head>

<body>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">

      <?php echo anchor('/', 'West End Athletic', 'class="brand"'); ?>

			<ul class="nav pull-right">

        <li><?php echo anchor('/admin/sessions/new_session', 'Login'); ?></li>

			</ul>

		</div>
	</div>
</div>

<div class="container">