<?php

require ("database.php");

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
?>