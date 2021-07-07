<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo Time(); ?>">
</head>
<body>
	<fieldset>
    <legend>SignUp</legend>
<form class="form-data" action="user.php" method="post">
	<input type="text" name="username" placeholder="username"><br>
	<input type="text" name="password" placeholder="password"><br>
	<input type="text" name="email" placeholder="email"><br>
	<input type="text" name="dob" placeholder="DOB"><br><br>
	<input type="submit" value="SignUp">
</form>
</fieldset>
</body>
</html>
