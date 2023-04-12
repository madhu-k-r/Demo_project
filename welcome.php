<html>
<head>
<title>Welcome Page</title>
<link rel="stylesheet" href="style.css">
</head>
<body class="body1">
<center><h1>WELCOME PAGE</h1>
<?php  
$name=$_POST["name"];
echo "Welcome: $name";
?>
<br>
<?php  
$age=$_POST["age"];
echo "your age is: $age";
?>
<br>
<?php  
$companyname=$_POST["companyname"];
echo "Your company name is: $companyname";  
?>
</center>
<br><br>
<center>
<a href="index.html" ><input type="submit" value="Home" class="input2">  </a>
</center>
</body>
</html>