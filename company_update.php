<?php
include('db.php');

$a = $_POST['c_name'];
$d = $_POST['c_person'];
$e = $_POST['add'];
$f = $_POST['city'];
$g = $_POST['contact'];

$cid = $_SESSION['cid'];

$que = "UPDATE company SET company_name = '$a', contact_person = '$d', address = '$e', city = '$f', contact = '$g' WHERE id = $cid";
mysqli_query($con, $que);
header("location:company_profile.php");


?>