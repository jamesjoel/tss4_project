<?php
include('db.php');

// print_r($_GET);
$a = $_GET['key'];

$que = "UPDATE jobs SET status = (1 - status)  WHERE id = $a";
mysqli_query($con, $que);
header("location:jobs.php");
?>