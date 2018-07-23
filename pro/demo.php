<?php
$str1 = "red green blue yellow";
$str2= "indore ujjain bhopal mhow";
$arr1=explode(" ", $str1);
$arr2=explode(" ", $str2);

$arr2=array_reverse($arr2);
$y=0;
foreach($arr1 as $x)
{
	echo $x." ".$arr2[$y];
	echo "<Br />";
	$y++;
}
?>