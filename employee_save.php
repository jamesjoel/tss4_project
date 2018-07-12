<?php
// print_r($_POST);
include('db.php');

$a=$_POST['f_name'];
$b=$_POST['username'];
$c=$_POST['pass'];
$d=$_POST['add'];
$e=$_POST['city'];
$f=$_POST['contact'];

$que="INSERT INTO employee (full_name, username, password, address, city, contact) VALUES ('$a', '$b', '$c', '$d', '$e', '$f')";

mysqli_query($con, $que);
header("location:employee_login.php");
?>