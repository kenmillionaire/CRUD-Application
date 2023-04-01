<?php
require ("database.php");

$id = $_GET['id'];

$delete = mysqli_query($connect, "DELETE FROM students WHERE id = '$id'");

if (delete) {
  database ("Location: all-students.php");
}
?>
