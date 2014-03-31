Registeration page
<div id="registration">
	<?php echo form_open('users/register_user'); ?><br />
	Username <?php echo form_input('username', "Username"); ?><br />
	Password <?php echo form_input('pw', "Password"); ?><br />
	Email <?php echo form_input('email', "Emails"); ?><br />
	<?php echo form_submit('submit', "Register"); ?><br />
	<?php echo form_close(); ?>
</div>