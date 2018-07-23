<?php
include('db.php');
extract($_POST);
$cid = $_SESSION['cid'];
if($_FILES['image']['name']=="")
{

	$que = "UPDATE company SET company_name = '$c_name', contact_person = '$c_person', address = '$add', city = '$city', contact = '$contact' WHERE id = $cid";
	mysqli_query($con, $que);
	header("location:company_profile.php");
	
}
else
{
	$name = $_FILES['image']['name'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$arr = explode(".", $name);
	$ext = end($arr);
	$new_name = time().rand(10000, 100000).".".$ext;
	if($ext=="jpg" || $ext=="gif" || $ext=="png" || $ext=="jpeg")
	{
		move_uploaded_file($tmp_name, "company_logo/".$new_name);
		$que = "UPDATE company SET company_name = '$c_name', contact_person = '$c_person', address = '$add', city = '$city', contact = '$contact', image = '$new_name' WHERE id = $cid";
		mysqli_query($con, $que);
		header("location:company_profile.php");
	}
	else
	{
		$_SESSION['msg']="This File Type not Allowed !";
		header("location:company_profile.php");
	}
}


?>