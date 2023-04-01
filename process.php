<?php

require ("database.php");

//CREATE STUDENT
if (isset ($_POST['create_student'])) {
$fullname = $_POST['fullname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$class = $_POST['class'];
$hobby = $_POST['hobby'];


$Insert = mysqli_query($connect, "INSERT INTO students (fullname, gender, age, class, hobby) 
VALUES('$fullname', '$gender', '$age', '$class', '$hobby')");

if ($Insert) {
  echo "Student created successfully";
} else {
  echo "An error occurred";
}

}

//UPDATE STUDENT
if (isset ($_POST ['edit-student'])) {
  $id = $_POST ['Id'];
 $fullname = $_POST['fullname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$class = $_POST['class'];
$hobby = $_POST['hobby'];
}


$update_student = mysqli_query($connect, "UPDATE students SET fullname = '$fullname', gender = '$gender', age =  '$age', class = '$class', hobby = '$hobby' WHERE id = '$id' "); 
 
if ($update_student) {
  header ("Location:/side_hustle/CRUD-Application/all-students.php");
}


?>