<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
</head>
<body>
<?php
$dbhost = "localhost";
$dbname = "ass_2";
$dbuser = "user_from";
$dbpass = "passwordsecret";
$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$sql1="SELECT count(rate_ID) AS total FROM ratinginfo";
$result1=mysqli_query($connection,$sql1);
$values1=mysqli_fetch_assoc($result1);
$num_rows1=$values1['total'];


$sql2="SELECT AVG(menu_rate) AS avgmenurating FROM ratinginfo";
$result2=mysqli_query($connection,$sql2);
$values2=mysqli_fetch_assoc($result2);
$num_rows2=$values2['avgmenurating'];

$sql3="SELECT AVG(food_rate) AS avgfoodrating FROM ratinginfo";
$result3=mysqli_query($connection,$sql3);
$values3=mysqli_fetch_assoc($result3);
$num_rows3=$values3['avgfoodrating'];

$sql4="SELECT AVG(service_rate) AS avgservicerating FROM ratinginfo";
$result4=mysqli_query($connection,$sql4);
$values4=mysqli_fetch_assoc($result4);
$num_rows4=$values4['avgservicerating'];

$sql5="SELECT AVG(atmosphere_rate) AS avgatmosphererating FROM ratinginfo";
$result5=mysqli_query($connection,$sql5);
$values5=mysqli_fetch_assoc($result5);
$num_rows5=$values5['avgatmosphererating'];

echo "<img src='logo.jpg' alt='Restaurant'/>";
echo "<br>";
echo "Number of people submitted= $num_rows1"; 
echo "<br>";
echo "Average Menu Rating= $num_rows2";
echo "<br>";
echo "Average Food Rating= $num_rows3";
echo "<br>";
echo "Average Service Rating= $num_rows4";
echo "<br>";
echo "Average Atmosphere Rating= $num_rows5";
echo "<body style='background-color:grey'>";
?>
</body>
</html>