<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mydb";

// Create connection
$connect = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($connect->connect_error) {
    echo "<script>alert('Connection failed : please check if the database exists.');</script>";
	echo "<script>window.location.href = '../pages/interrogations.php';</script>";
}
$sql='SELECT p.NumPat, p.Nom, Prenom, a.NumService, s.Nom FROM Acte AS a JOIN Patient AS p ON a.NumPat = p.NumPat JOIN Service AS s ON a.NumService = s.NumService WHERE p.NumPat IN (SELECT NumPat FROM acte GROUP BY NumPat HAVING COUNT(*) = 1)';
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
?>

<!DOCTYPE html>
<html>
<head>
	<title>Database Query - Q11</title>
</head>
<body>
</body>
</html>