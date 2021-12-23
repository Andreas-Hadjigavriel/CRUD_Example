<!-- LOGIN PAGE -->
<?php 	
		include_once('server.php'); 
?>

<!DOCTYPE html>
<html lang="el">
	
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>

<body>

	<div class="sidebar">
		<h2><p id="header-log">Aratos Project Test </p></h2>
	</div>

	<div class="header">
		<h2>Login</h2>
	</div>

	<!-- Login form -->
	<form method="post" action="index.php" >
		
		<?php include("errors.php"); ?>

		<div class="input-group">
			<label class="lbl">Username</label>
			<input type="text" placeholder="username" name="username" >
		</div>
		<div class="input-group">
			<label class="lbl">Password</label>
			<input type="password" placeholder="password" name="password" id="myInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}" title="Must contain at least 8 characters, one number and one uppercase and lowercase letter.">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
	</form>
	<!-- /Login form -->
	
</body>
</html>