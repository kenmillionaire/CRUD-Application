<?php
include ("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Student</title>
</head>
<body>
  <a href="/side_hustle/CRUD-Application/all-students.php">All Students</a>

<?php
$id = $_GET['id'];

$student_details = mysqli_query($connect, "SELECT * FROM students WHERE id = '$id'");

$student = mysqli_fetch_assoc($student_details);

if (!$student){
  exit ('Student not found');
}
?>

  <h2>EDIT STUDENT</h2>

<form action="process.php" method="post">
<input type="hidden" value="<?php echo $id ?>" name="id">

<p>
<label for="">Full name:</label>
<input type="text" name="fullname" value="<?php echo $student['fullname'] ?>" ><br><br>
</p>


<p>
<label for="">Gender:</label>
<select name="gender" id="">
<option value="">Select Gender</option>
<option value="M" <?php if ($student ['gender'] === "M") echo "selected"; ?>>Male</option>
<option value="F" <?php if ($student ['gender'] === "F") echo "selected";  ?>>Female</option>
</select><br><br>
</p>


<p>
<label for="">Age:</label>
<input type="text"  name="age" value="<?php echo $student['age'] ?>" ><br><br>
</p>



<p>
<label for="">Class:</label>
<input type="text"  name="class" value="<?php echo $student['class'] ?>" ><br><br>
</p>

<p>
<label for="">Hobby:</label>
<input type="text"  name="hobby" value="<?php echo $student['hobby'] ?>" ><br><br>
</p>

<p>
<input type="submit" value="Update" name="edit-student">
</P>

</form>


</body>
</html>