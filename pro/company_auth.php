<?php
include('db.php');
// print_r($_POST);
$u = $_POST['username'];
$p = $_POST['pass'];

$que = "SELECT * FROM company WHERE username = '$u'";
$result = mysqli_query($con, $que);

if(mysqli_num_rows($result)==1)
{
	$data=mysqli_fetch_assoc($result);
	if($data['password']==$p)
	{
		$_SESSION['cname']=$data['company_name'];
		$_SESSION['cid']=$data['id'];
		$_SESSION['is_company_logged_in']=true;
		header("location:company_dash.php");
	}
	else
	{
		$_SESSION['msg']="Password is Incorrect !";
		header("location:company_login.php");
	}
}
else
{
	$_SESSION['msg']="Username And Password Incorrect !";
	header("location:company_login.php");
}


?>