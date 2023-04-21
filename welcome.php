<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
	<link rel="stylesheet" href="style.css">
</head>

<body class="body1">
	<center>
		<?php

$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbpwd = getenv("MYSQL_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");

		$conn = mysqli_connect($dbhost, "user1", "mypa55","testdb", $dbport);
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$age = $_REQUEST['age'];
		$companyName = $_REQUEST['companyName'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO sample_db VALUES ('$name',
			'$age','$companyName')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Data stored in a database successfully.</h3>";

			echo nl2br("\n$name\n $age\n "
				. "$companyName\n");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
