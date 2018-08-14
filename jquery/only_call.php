<?php
$con =  mysqli_connect("localhost", "admin", "admin", "tss4");
$que="DELETE FROM cities WHERE city_id=2";
mysqli_query($con, $que);
header("location:ajax1.php");
?>