<?php
include('db.php');

// $a = $_POST['c_name'];
// $d = $_POST['c_person'];
// $e = $_POST['add'];
// $f = $_POST['city'];
// $g = $_POST['contact'];

extract($_POST);
$cid = $_SESSION['cid'];

$que = "UPDATE company SET company_name = '$c_name', contact_person = '$c_person', address = '$add', city = '$city', contact = '$contact' WHERE id = $cid";
mysqli_query($con, $que);
header("location:company_profile.php");


?>