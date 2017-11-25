<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login PHP</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript" src="jquery-1.7.min.js"></script>
</head>
<body>
	<div class="container" >
	<div style="margin-left:25px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></div>
		<h1>Admin Area</h1>
		<form method="post" action="wakalogin.php" id="lg-form" name="lg-form" class="container"  >

			<div class="input-group">
				<label for="username">Username:</label>
				<input type="text" name="username" id="username" placeholder="username"/>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" placeholder="password" />
			</div>

			<div>
				<button type="submit" name="submit" id="login">Login</button>
			</div>

		</form>
		<div id="message"></div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="pritesh chandra maharana"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="pritesh chandra maharana"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="pritesh chanadra maharana"></script>

</body>
</html>
