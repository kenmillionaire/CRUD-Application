<?php
require ("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>       
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Students</title>
</head>
<body>
<a href="all-students.php">All Student</a>

<?php

$id = $_GET['id'];
$student_details= mysqli_query($connect, "SELECT * FROM students WHERE id = '$id' ");

           $student = mysqli_fetch_assoc($student_details);

// if(!$student) {
//   exit('Student not found!');
// }

?>

<h2>View Student</h2>
<p>Full name: <?= $student['fullname'] ?></p>
<p>Gender: <?= $student['gender'] ?></p>
<p>Age: <?= $student['age'] ?></p>
</body>
</html>