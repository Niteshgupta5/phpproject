<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo Time(); ?>">
</head>
<body>
<fieldset>
    <legend>Login</legend>	
<form class="form-data" action="validation.php" method="post">
	<input type="text" name="username" placeholder="username"><br>
	<input type="text" name="password" placeholder="password"><br><br>
    <input type="submit" value="Login">
</form><br>
<a href="signup.php">SignIn</a>
</fieldset>
</body>
</html>


