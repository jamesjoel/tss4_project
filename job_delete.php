<?php
include("db.php");

// print_r($_GET);
$a = $_GET['key'];
$que="DELETE FROM jobs WHERE id = $a";
mysqli_query($con, $que);
header("location:jobs.php");

?>