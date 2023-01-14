<?php
if(!empty($_POST))
 {    
$dbhost = "localhost";
$dbname = "ass_2";
$dbuser = "user_from";
$dbpass = "passwordsecret";

$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()) {
	die("Database connection failed: ".mysqli_connect_error().
		"(".mysqli_connect_errno().")");
}
$sql = "INSERT INTO usersinfo ( first_name,last_name,email,phone) VALUES (
'{$connection->real_escape_string($_POST['first_name'])}',
'{$connection->real_escape_string($_POST['last_name'])}',
'{$connection->real_escape_string($_POST['email'])}',
'{$connection->real_escape_string($_POST['phone'])}')";
$insert = $connection->query($sql);
if( $insert == TRUE){
$ins = "INSERT INTO ratinginfo ( 'user-ID',food_rate,menu_rate,service_rate,atmosphere_rate,transaction_date,remarks,status) VALUES (
'{$connection->real_escape_string($_POST['user-ID'])}',
'{$connection->real_escape_string($_POST['food_rate'])}',
'{$connection->real_escape_string($_POST['menu_rate'])}',
'{$connection->real_escape_string($_POST['service_rate'])}',
'{$connection->real_escape_string($_POST['atmosphere_rate'])}',
'{$connection->real_escape_string($_POST['transaction_date'])}',
'{$connection->real_escape_string($_POST['remarks'])}',
'{$connection->real_escape_string($_POST['status'])}')";
$sq = $connection->query($ins);
if($sq == TRUE){
	echo "DONE";
}
}
else{
	echo "NOT DONE";
}
$connection->close();
}
?>
<!DOCTYPE html>
<html>
<head>
	<h1>Please take this survey</h1>
<link rel="stylesheet" type="text/css" href="mark.css">
<img src="logo.jpg" alt="Restaurant" class="center">
</head>
<body>
	<form action="" method="POST">
		<table border="2" align="center">
			<tr>
				<th>First Name</th>
				<th>
					<input type="text" name="first_name">
				</th>
			</tr>
			<tr>
				<th>Last Name</th>
				<th>
					<input type="text" name="last_name">
				</th>
			</tr>
			<tr>
				<th>Email</th>
				<th>
					<input type="text" name="email">
				</th>
			</tr>
			<tr>
				<th>Phone</th>
				<th>
					<input type="text" name="phone">
				</th>
			</tr>
			<tr>
				<th>User ID</th>
				<th>
					<input type="text" name="user-ID">
				</th>
			</tr>
			<tr>
				<th>Food Rate</th>
				<th>
					<input type ="radio" value="1" name="food_rate">1
					<input type ="radio" value="2" name="food_rate">2
					<input type ="radio" value="3" name="food_rate">3
					<input type ="radio" value="4" name="food_rate">4
					<input type ="radio" value="5" name="food_rate">5
				</th>
			</tr>
			<tr>
				<th>Menu Rate</th>
				<th>
					<input type ="radio" value="1" name="menu_rate">1
					<input type ="radio" value="2" name="menu_rate">2
					<input type ="radio" value="3" name="menu_rate">3
					<input type ="radio" value="4" name="menu_rate">4
					<input type ="radio" value="5" name="menu_rate">5
				</th>
			</tr>
			<tr>
				<th>Service Rate</th>
				<th>
					<input type ="radio" value="1" name="service_rate">1
					<input type ="radio" value="2" name="service_rate">2
					<input type ="radio" value="3" name="service_rate">3
					<input type ="radio" value="4" name="service_rate">4
					<input type ="radio" value="5" name="service_rate">5
				</th>
			</tr>
			<tr>
				<th>Atmosphere Rate</th>
				<th>
					<input type ="radio" value="1" name="atmosphere_rate">1
					<input type ="radio" value="2" name="atmosphere_rate">2
					<input type ="radio" value="3" name="atmosphere_rate">3
					<input type ="radio" value="4" name="atmosphere_rate">4
					<input type ="radio" value="5" name="atmosphere_rate">5
				</th>
			</tr>
			<tr>
				<th>Transaction Date</th>
				<th>
					<input type="date" name="transaction_date">
				</th>
			</tr>
			<tr>
				<th>Remarks</th>
				<th>
					<textarea name="remarks" rows="3" cols="30"></textarea>
				</th>
			</tr>
			<tr>
				<th>Status</th>
				<th>
					<input type ="radio" value="0" name="status">0
					<input type ="radio" value="1" name="status">1
				</th>
			</tr>
			<tr>
				<th><input type="reset"></th>
				<th>
					<input type="submit" name="submit">
				</th>
			</tr>
		</table>
	</form>
</body>
</html>