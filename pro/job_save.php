<?php
include("db.php");
extract($_POST);
$cid = $_SESSION['cid'];

if($jid=="")
{

	$que = "INSERT INTO jobs (cid, job_title, category, vacancy, salary, min_que, skills) VALUES ($cid, '$title', '$cate', '$vacancy', '$salary', '$min_qua', '$skills')";
}
else
{
	
	$que = "UPDATE jobs SET job_title = '$title', category = '$cate',vacancy='$vacancy', salary = '$salary', min_que='$min_qua', skills = '$skills' WHERE id = $jid";
}



mysqli_query($con, $que);
header("location:jobs.php");
?>