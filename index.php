<?php
include ("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<h3>CREATE STUDENT</h3>

<form action="process.php" method="post">

<p>
<label for="">Full name:</label>
<input type="text"  name="fullname"><br><br>
</p>

<p>
<label for="">Gender:</label>
<select name="gender" id="">
<option value="">Select Gender</option>
<option value="M">Male</option>
<option value="F">Female</option>
</select><br><br>
</p>

<p>
<label for="">Age:</label>
<input type="text"  name="age"><br><br>
</p>

<p>
<label for="">Class:</label>
<input type="text"  name="class"><br><br>
</p>

<p>
<label for="">Hobby:</label>
<input type="text"  name="hobby"><br><br>
</p>

<p>
<input type="submit" value="Create student" name="create_student">
</P>

</form>



<?php


if ($connect) {
  echo "Cconnected";


} else {
  echo "Not Connected";
}


?>
</body>
</html>