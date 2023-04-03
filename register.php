<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
</head>
<body>
  
<?php
include "database.php";
?>

<h2>Register</h2>

<form action="/side_hustle/CRUD-Application/process.php" method="post">

<p>
<label for="">Name:</label>
<input type="text"  name="user_name"><br><br>
</p>

<p>
<label for="">Email:</label>
<input type="email"  name="email"><br><br>
</p>

<p>
<label for="">Password:</label>
<input type="password"  name="pass"><br><br>
</p>

<p>
<label for="">Confirm Password:</label>
<input type="password"  name="confirm_pass"><br><br>
</p>

<p>
<input type="submit" value="Register" name="save_user">
</P>

</form>

</body>
</html>