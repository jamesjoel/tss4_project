<?php
$con =  mysqli_connect("localhost", "admin", "admin", "tss4");
$x=$_POST['stu_name'];
$y=$_POST['stu_age'];
$z=$_POST['stu_fee'];




$que="INSERT INTO student (name, age, fee) VALUES ('$x', '$y', '$z')";
mysqli_query($con, $que);


$que2="SELECT * FROM student";
$result = mysqli_query($con, $que2);
echo "<table align='center' border='1' width='200'>";
while($data=mysqli_fetch_assoc($result))
{
	echo "<tr>";
	echo "<td>".$data['name'].'</td>';
	echo "<td>".$data['age'].'</td>';
	echo "<td>".$data['fee'].'</td>';
	echo "</tr>";
}
echo "</table>";



?>