<?php
add_shortcode('get-login','my_magic_login');

function my_magic_login(){
	?>
	<section class="login">
		<div class="contact_form_details">
			<h1>Login</h1>
		<form name="myForm" id="login" action="" method="post" >
			<div class="error-msg"></div>
			<div class="form">
				<div class="form-group">
					<label for="username">Username</label>
					<input id="username" type="text" class="form-control" name="username">
					<span  style="color: red" id="username_error"></span>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input id="password" type="password" class="form-control" name="password">
					<span style="color: red" id="password_error"></span>
				</div>
			<p><a class="lost" href="<?php echo wp_lostpassword_url(); ?>">Lost your password?</a></p>
				<input class="submit_button" id="submit_button" type="button" value="Login" name="submit" onclick="return validateForm()">
			</div>
			<p><a class="new-account" href="<?php echo home_url("/sign-up");?>">Create New Account</a></p>
			<?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
		</form>
	</div>
	</section>
	<?php
}

add_shortcode('get-registration','my_magic_registration');

function my_magic_registration(){
	?>

	<section class="Register">
		<div class="contact_form_details">
			<h1>Registration</h1>
	<form name="reg-form" id="registration" action="" method="post" onsubmit="return validateForm()">
		<div class="error-msg"></div>
		<div class="form-group">
			<label for="username">Name</label>
			<input id="name" type="text" class="form-control" name="name">
			<span  style="color: red" id="name_error"></span>
		</div>
		<div class="form-group">
			<label for="username">Email</label>
			<input id="email" type="email" class="form-control" name="email">
			<span  style="color: red" id="email_error"></span>
		</div>
		<div class="form-group">
			<label for="username">Mobile Number</label>
			<input id="mobile" type="Number" class="form-control" name="mobile">
			<span  style="color: red" id="mobile_error"></span>
		</div>
		<div class="form-group">
			<label for="username">Address</label>
			<input id="address" type="text" class="form-control" name="address">
			<span  style="color: red" id="address_error"></span>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input id="password" type="password" class="form-control" name="password">
			<span  style="color: red" id="password_error"></span>
		</div>
		<div class="form-group">
			<label for="password">Confirm-Password</label>
			<input id="cpassword" type="password" class="form-control" name="cpassword">
			<span  style="color: red" id="cpassword_error"></span>
		</div>
		<input class="submit_button" id="reg_button" type="button" value="Submit" name="submit">
		<?php wp_nonce_field( 'ajax-reg-nonce', 'security' ); ?>
	</form>
</div>
</section>

	<?php
}
?>