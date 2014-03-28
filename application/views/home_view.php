<div id="container">
	<div class="top">
		<div id="menu">
		</div>

		<div id="login"><!--LOGIN FORM-->
			<?php echo form_open('users/validate_users'); ?>
			<?php echo form_input('username', 'Username'); ?>
			<?php echo form_password('pw', 'Password'); ?>
			<?php echo form_submit('submit', 'Login'); ?>
			<?php echo form_close(); ?>
		</div>

	<div id="body">	
	<h1>Test!</h1>
		<p>Body Test
	</div>
</div>