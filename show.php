<?php
include'db_conn.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		p {
			font-size: 20px;
			color: #ff0000;
			background-color: #ffff00;
		}
	</style>
</head>
<body>
<p>	
<?php
$data ="1";
//Created a template
$sql = "SELECT * FROM users WHERE user_id = ?;";
//Create a prepared statement

$stmt = mysqli_stmt_init($conn);

//prepare the prepared statement
if (!mysqli_stmt_prepare($stmt,$sql)) {
	echo "SQL Statement Failed";
}
else {
	//bind parameters to the placeholder
	mysqli_stmt_bind_param($stmt,"s",$data);// s for string, i for integer
	//Run parameters inside database

	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	while ($row = mysqli_fetch_assoc($result)) {
	echo "Serial No: ".$row['user_id'] ."<br>";
	echo "First Name: ".$row['user_first'] ."<br>";
	echo "Last Name: ".$row['user_last'] ."<br>";
	echo "User Name: ".$row['user_email'] ."<br>";
	echo "Password: ".$row['user_uid'] ."<br>";
	echo "Password: ".$row['user_pwd'] ."<br>";
}

}


?>
</p>
</body>
</html>