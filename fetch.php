<!DOCTYPE html>
<html>
<head>
	<title>Insert Page page</title>
	<style>
	table, th, td {
  border: 1px solid black;
}
	</style>
	<link rel="stylesheet" href="style.css">
</head>

<body class="body1">
	<center>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "sample");

		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
// SQL QUERY
$result = mysqli_query($conn,"SELECT * FROM sample_db");
if (mysqli_num_rows($result) > 0) {
	?>
		  <table>
		  
		  <tr>
			<td>Name</td>
			<td>Age</td>
			<td>Company Name</td>
		  </tr>
		<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
		<tr>
			<td><?php echo $row["name"]; ?></td>
			<td><?php echo $row["age"]; ?></td>
			<td><?php echo $row["companyname"]; ?></td>
		</tr>
			<?php
			$i++;
			}
			?>
		</table>
	<?php
	}
	else{
		echo "No result found";
	}
	?>
</center>
</body>
</html>
