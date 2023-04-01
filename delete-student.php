<?php
require 'database.php';

$id = $_GET['id'];

$delete = mysqli_query($connect, "DELETE FROM students WHERE id = '$id'");

if ($delete) {
   header ("Location:/side_hustle/CRUD-Application/all-students.php");
}
?>
