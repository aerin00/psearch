Registration page
<div id="registration">
	<?php echo form_open('login/register_user'); ?><br />
	Username <?php echo form_input('username', "Username"); ?><br />
	Password <?php echo form_input('pw', "Password"); ?><br />
	Password confirmation <?php echo form_input('pw2', "Password"); ?><br />
	<?php echo form_submit('submit', "Register"); ?><br />
	<?php echo form_close(); ?>


	<?php echo validation_errors('<p class="error">'); ?>

</div>