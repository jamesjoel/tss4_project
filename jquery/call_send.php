<?php
$con =  mysqli_connect("localhost", "admin", "admin", "tss4");
$x=$_POST['a'];
$y=$_POST['b'];
$z=$_POST['c'];




$que="INSERT INTO student (name, age, fee) VALUES ('$x', '$y', '$z')";
mysqli_query($con, $que);
?>