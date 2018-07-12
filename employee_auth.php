<?php
include('db.php');
// print_r($_POST);
// die;
$u=$_POST['username'];
$p=$_POST['pass'];
$que="SELECT * FROM employee WHERE username='$u'";
$result=mysqli_query($con, $que);

if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	
	if($data['password']==$p)
	{
		
		$_SESSION['name']=$data['full_name'];
		$_SESSION['eid']=$data['id'];
		$_SESSION['is_employee_logged_in']=true;
		header("location:employee_dash.php");
	}
	else
	{
		$_SESSION['msg'] = "Password is Incorrect";
		header("location:employee_login.php");
	}
}
else
{
	$_SESSION['msg'] = "Username is Incorrect";
	header("location:employee_login.php");

}

?>