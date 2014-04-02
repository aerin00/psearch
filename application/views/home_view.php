<div id="topheader"></div>
<div id="container">
	<div class="top">
		
		<div class="form" id="url_form">
			<?php echo form_open('images/img_get'); ?>
			<?php echo form_input('url', 'Image URL'); ?>
			<?php echo form_submit('submit', 'Upload'); ?>
			<?php echo form_close(); ?>
		</div>

		<div class="form" id="login"><!--LOGIN FORM-->
			<?php echo form_open('login/validate_user'); ?>
			<?php echo form_input('username', 'Username'); ?>
			<?php echo form_password('pw', 'Password'); ?>
			<span class="buttons"><?php echo form_submit('submit', 'Login'); ?></span>
			<span class="buttons"><?php echo anchor('site/register', "Register") ?></span>
			<?php echo form_close(); ?>
	</div>

	</div>

	<div id="body">	
	<h1>Body Test!</h1>
		<p>Body Test
	</div>
</div>