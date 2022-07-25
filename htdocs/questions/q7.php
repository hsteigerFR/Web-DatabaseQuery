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
$sql='SELECT Nom, Specialite, NumPat FROM Medecin NATURAL JOIN Acte WHERE NumPat IN (SELECT NumPat FROM Acte GROUP BY NumPat HAVING COUNT(DISTINCT NumService) = (SELECT COUNT(DISTINCT NumService) FROM Service)) ORDER BY Nom ASC';
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
	<title>Database Query - Q7</title>
</head>
<body>
</body>
</html>