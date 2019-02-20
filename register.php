<?php include "server.php"; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="styles/login-styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.7.2/css/bulma.min.css" />
</head>
<body>
	<section class="hero is-fullheight">
    <div class="hero-body">
	<div class="box" id="regForm">
  		<h2 class="title">Register</h2>
	
	<form method="post" action="register.php">
		<?php include('inc/errors.php'); ?>
			<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
			</div>
			<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
			</div>
			<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
			</div>
			<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
			</div>
			<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
			</div>
		<p><i>
			Already a member? <a href="login.php">Sign in</a>
		</i></p>
		</section>
	</form>
	</div>
	</div>
</body>
</html>