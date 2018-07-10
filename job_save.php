<?php
include("db.php");
extract($_POST);
$cid = $_SESSION['cid'];
$que = "INSERT INTO jobs (cid, job_title, category, vacancy, salary, min_que, skills) VALUES ($cid, '$title', '$cate', '$vacancy', '$salary', '$min_qua', '$skills')";

mysqli_query($con, $que);
header("location:create_job.php");
?>