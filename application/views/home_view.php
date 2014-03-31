<div id="topheader"></div>
<div id="container">
	<div class="top">
		<div id="menu">
		</div>
	</div>	

		<div id="login"><!--LOGIN FORM-->
			<?php echo form_open('users/validate_user'); ?>
			<?php echo form_input('username', 'Username'); ?>
			<?php echo form_password('pw', 'Password'); ?>
			<span class="buttons"><?php echo form_submit('submit', 'Login'); ?></span>
			<span class="buttons"><?php echo anchor('site/register', "Register") ?></span>
			<?php echo form_close(); ?>
		</div>

	<div id="body">	
	<h1>Body Test!</h1>
		<p>Body Test
	</div>
</div>