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
$sql='SELECT NumSalle, SUM(NbLits) - COUNT(*) FROM Salle NATURAL JOIN Service NATURAL JOIN Hospitalisation WHERE Nom = "Cardiologie" AND DateEntree <= "2018-07-04" AND DateSortie >= "2018-07-04" GROUP BY NumSalle';
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
	<title>Database Query - Q4</title>
</head>
<body>
</body>
</html>