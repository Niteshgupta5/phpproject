<?php
session_start();
header('location:login.php');



?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo Time(); ?>">
</head>
<body>
  <div class="navbar">
    <a href="signup.php">Signin</a>&nbsp;&nbsp;&nbsp;
<a href="login.php">Logout</a>
</div><br><br>

  <table class="table-data" border="1">
  <tr>
    <th>S.No.</th>
    <th>Size</th>
    <th>Prize</th>
    <th>EMI</th>
  </tr>
  <tr>
    <td>1.</td>
    <td>32 sq ft</td>
    <td>2500</td>
    <td>12 month</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>56 Sq ft</td>
    <td>4500</td>
    <td>36 month</td>
  </tr>
</table>

</body>
</html>
