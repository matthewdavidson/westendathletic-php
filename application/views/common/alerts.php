<div class="alerts span6 offset3">

  <?php if (isset($alerts)) { ?>

  	<?php foreach ($alerts as $key => $value) { ?>

	  <div class="row">
	    <div class="alert fade in <?php echo 'alert-' . $key ?>">
	      <?php echo $value; ?>
	      <button class="close" data-dismiss="alert">&times;</button>
	    </div>
	  </div>

  	<?php } ?>

  <?php } ?>

  <?php if($this->session->flashdata('alerts')) { ?>

  <?php foreach ($this->session->flashdata('alerts') as $key => $value) { ?>

	  <div class="row">
	    <div class="alert fade in <?php echo 'alert-' . $key ?>">
	      <?php echo $value; ?>
	      <button class="close" data-dismiss="alert">&times;</button>
	    </div>
	  </div>

  	<?php } ?>

  <?php } ?>
</div>