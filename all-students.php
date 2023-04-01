<?php
require ("database.php");

$students = mysqli_query($connect, 'SELECT * FROM students');
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
<a href="create-student.php">Add New Studemt</a>
<h2>ALL STUDENTS</h2>

<table>
<thead>
<th>ID</th>
<th>Full Name</th>
<th>Gender</th>
<th>Age</th>
<th>Class</th>
<th>Hobby</th>
<th>Action</th>
</thead>
<tbody>
<?php foreach($students as $student):?>
<tr>
  <td><?= $student['id'] ?></td>
  <td><?= $student['fullname'] ?></td>
  <td><?= $student['gender'] ?></td>
  <td><?= $student['age'] ?></td>
  <td><?= $student['class'] ?></td>
  <td><?= $student['hobby'] ?></td>
   <td>
      <a href="view-student.php?id=<?= $student['id'] ?>">View</a>
    <a href="edit-student.php?id=<?= $student['id'] ?>">Edit</a> 
    <a href="delete-student.php?id=<?= $student['id'] ?>">Delete</a>
     </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</body>
</html>
