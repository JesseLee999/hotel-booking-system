<?php include "server.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
	<link rel="stylesheet" type="text/css" href="styles/login-styles.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.7.2/css/bulma.min.css" />
</head>
<body>
	<section class="hero is-fullheight">
  <div class="hero-body">
			<div class="box" id="logForm">
  			<h2 class="title">Login</h2>
	 
  <form method="post" action="login.php">
		<?php include('inc/errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user" >Login</button>
		</div>
  	<p><i>
  		Not yet a member? <a href="register.php">Sign up</a>
		</i></p>
		</div>
	</div>
	</section>
  </form>
</body>
</html>