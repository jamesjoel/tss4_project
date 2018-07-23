<?php
include('db.php');
// print_r($_POST);die;
extract($_POST);

$name = $_FILES['resume']['name'];
$tmp_name = $_FILES['resume']['tmp_name'];
$arr = explode(".", $name);
$ext = end($arr);
$a = $_SESSION['eid'];


$new_name = time().rand(10000, 100000).".".$ext;
if($ext == "doc" || $ext == "docx" || $ext == "pdf")
{
	move_uploaded_file($tmp_name, "resume/".$new_name);
	$que = "INSERT INTO apply (cover_msg, resume, eid, job_id) VALUES ('$msg', '$new_name', $a, $jid)";
	mysqli_query($con, $que);
	$_SESSION['msg']="Successfuly apply for job.";
	header("location:employee_dash.php");
}
else
{
	$_SESSION['msg']="This File Type Not Allowed";
	header("location:apply.php");
}

?>