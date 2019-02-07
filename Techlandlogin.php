<?php
	session_start();
	if (isset($_SESSION['uid'])) {
		header("Location: Tech.php");
		exit;
	}
	require 'header.php'
?>

<p>Login to Techland</p>

<div class="signup">
	<div class="row">
		<div class="col-lg-12" id="category">
			<b>Login with password</b>:
		</div>
	</div>
	<div class="row" id="loginform">
		<div class="col-lg-12">
			<form action="includes/techlandlogin.inc.php" method="POST">
				Username: <input type="text" name="uid" size="24">
				Password: <input type="password" name="pwd" size="24">
				<button type="submit" name="login-submit">Login</button>
			</form>
		</div>
	</div>
</div>

<div class="signup">
	<div class="row">
		<div class="col-lg-12" id="category">
			<b>Reset your Password</b>:
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			Please enter your email address and a link allowing you to reset your password will be sent to you.
			<form action="">
				Email: <input type="text" name="email" size="24">
				<button type="emailsubmit">Submit</button>
			</form>
		</div>
	</div>
</div>

<footer>
	<div class="pagefooter">
		<div class="row">
			<div class="col-lg-12">
				<form action="">
					<input type="text" name="question" size="64">
					<button type="submit" name="submit">Search</button>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="">Techland</a> - Copyright © 2005 - 2019 
				<a href="facebook.com/stephenjohnson01">Falodu Stephen Abimbola</a>. All rights reserved
				See <a href="">How to Advertise</a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				Disclaimer: Every Techland member is solely responsible for anything that he/she posts or uploads on Techland.
			</div>
		</div>
	</div>
</footer>


</body>
<!-- Latest compiled and minified JavaScript -->
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</html>