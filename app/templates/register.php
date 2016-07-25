<?php  $this->layout('master', [
		'title'=> "Register Page",
		'desc'=> "Register here to be a member"
		]); ?>

<!-- register -->
	<div class="register">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Register Here</h3>
			<p class="est animated wow zoomIn" data-wow-delay=".5s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
				deserunt mollit anim id est laborum.</p>
			<div class="login-form-grids">
				<h5 class="animated wow slideInUp" data-wow-delay=".5s">profile information</h5>
				<form class="animated wow slideInUp" data-wow-delay=".5s" action="index.php?page=register" method="post">
					<input type="text" name="fname" placeholder="First Name..." required=" " >
					<input type="text" name="lname" placeholder="Last Name..." required=" " >
				</form>
				<div class="register-check-box animated wow slideInUp" data-wow-delay=".5s">
					<div class="check">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Subscribe to Newsletter</label>
					</div>
				</div>
				<h6 class="animated wow slideInUp" data-wow-delay=".5s">Login information</h6>
				<form class="animated wow slideInUp" data-wow-delay=".5s" action="index.php?page=register" method="post">
					<input type="email" name="email" placeholder="Email Address" required=" " >

					<?php if ( isset ($emailMessage) ) : ?>
						 <p> <?= $emailMessage ?></p>	
					<?php endif; ?>

					<input type="password" name="password" placeholder="Password" required=" " >
					<input type="password" name="password_confirm" placeholder="Password Confirmation" required=" " >
					<div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>I accept the terms and conditions</label>
						</div>
					</div>
					<input type="submit" name="new-account" value="Register">
				</form>
			</div>
			<div class="register-home animated wow slideInUp" data-wow-delay=".5s">
				<a href="index.php?page=home">Home</a>
			</div>
		</div>
	</div>
<!-- //register -->