<?php

require "database.php";

//CREATE STUDENT
if (isset($_POST['create_student'])) {
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
if (isset($_POST['edit-student'])) {
   $id = $_POST['id'];
 $fullname = $_POST['fullname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$class = $_POST['class'];
$hobby = $_POST['hobby'];


$update_student = mysqli_query($connect, "UPDATE students SET fullname = '$fullname', gender = '$gender', age =  '$age', class = '$class', hobby = '$hobby' WHERE id = '$id' "); 
 
if ($update_student) {
  header ("Location:all-students.php");
} else {
  echo "error";
}}


//REGISTER USER
if (isset ($_POST ['save_user'])) {
$name = $_POST ['user_name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$confirm_pass = $_POST['confirm_pass'];

if ($pass !== $confirm_pass) {
  exit ("<p>Password do not match!</p><a href='register.php'>Go Back </a>");
}

$user_exist = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'");

if(mysqli_num_rows ($user_exist) > 0) {
  exit ("<p>User already exist</p><a href='index.php'>Login</a>");
}

//md5 is used for hashing passwords
$cryptic_pass = md5($pass);

$insert_user = mysqli_query($connect, "INSERT INTO users (name,email,password) VALUES('$name', '$email', '$cryptic_pass')");

if ($insert_user) {
  header("Location: all-students.php");
}
}
?>