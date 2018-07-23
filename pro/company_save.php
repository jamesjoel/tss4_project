<?php
include('db.php');
// echo time();
// die;
// print_r($_FILES);
$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];


$arr = explode(".", $name);
$ext = end($arr);

$new_name = time().rand(10000, 100000).".".$ext;
$a = $_POST['c_name'];
$b = $_POST['username'];
$c = $_POST['pass'];
$d = $_POST['c_person'];
$e = $_POST['add'];
$f = $_POST['city'];
$g = $_POST['contact'];



if($ext=="jpg" || $ext=="gif" || $ext=="png" || $ext=="jpeg")
{
	move_uploaded_file($tmp_name, "company_logo/".$new_name);
	$que = "INSERT INTO company (company_name, username, password, contact_person, address, city, contact, logo) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$new_name')";
	mysqli_query($con, $que);
	header("location:company_login.php");
}
else
{
	$_SESSION['msg']="This File Type not Allowed !";
	header("location:company_reg.php");
}



?>