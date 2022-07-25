<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mydb";

if(isset($_POST["submit"]))
{
	$date = $_POST["text"];
	// Create connection
	$connect = new mysqli($servername, $username, $password,$dbname);
	// Check connection
	if ($connect->connect_error) {
		echo "<script>alert('Connection failed : please check if the database exists.');</script>";
		echo "<script>window.location.href = '../pages/interrogations.php';</script>";
	}
	$sql='SELECT * FROM Patient NATURAL JOIN Hospitalisation WHERE DateEntree = "' . $date . '"';
	$result = $connect->query($sql);

	while($field = $result->fetch_field()) {
			print($field->name);print(" ");
	}
	print("<br>");
	
	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()) {
		   print(implode(" ",$row));print("<br>");
		}
	}

	else{
		print("0 result");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Database Query - Q1</title>
</head>
<body>
<form method = 'POST' enctype = 'multipart/form-data'>
	<p>Enter a date : <input type="text" id="text" name="text" value="yyyy-mm-dd"><input type="submit" name="submit" value = "Lancer la recherche"></p>
</form>
</body>
</html>