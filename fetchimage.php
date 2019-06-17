<?php
error_reporting(1);
$server="localhost";
$user="root";
$dbname="education";
$password="";
$con=mysqli_connect($server,$user,$password,$dbname);
if($con)
{
	// echo"connected";
}
else
{
	die(mysqli_connect_error());
}        
$select_path="select * from image_table";

$var=mysql_query($select_path);

while($row=mysql_fetch_array($var))
{
 $image_name=$row["imagename"];
 $image_path=$row["imagepath"];
 echo "img src=".$image_path."/".$image_name." width=100 height=100";
}
?>