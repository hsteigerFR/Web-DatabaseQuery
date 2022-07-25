<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mydb";

// Create connection
$connect = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($connect->connect_error) {
    echo "<script>alert(Connection failed : please check if the database exists.);</script>";
	echo "<script>window.location.href = '../index.php';</script>";
}

if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   $i=0;
   while($data = fgetcsv($handle))
   {
	if ($i>0) {
		$numsalle = $data[0];
		$numservice = $data[1];
		$nblits = $data[2];
		$query = "INSERT into Salle(NumSalle,NumService,Nblits) values('$numsalle','$numservice','$nblits')";
		mysqli_query($connect, $query);}
	$i = $i +1;
   }
   fclose($handle);
   $connect->close();
   echo "<script>alert('Import complete.');</script>";
   echo "<script>window.location.href = 'salle.php';</script>";
  }
 }
}
if(isset($_POST["submit2"]))
{
	$query = "DROP TABLE Salle";
	$sql = "CREATE TABLE Salle (
NumSalle INT,
NumService INT,
Nblits INT,
PRIMARY KEY (NumSalle,NumService)
)";
mysqli_query($connect, $query);
	mysqli_query($connect, $sql);
	echo "<script>alert('Table reset.');</script>";
	echo "<script>window.location.href = 'salle.php';</script>";
}
?>  

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Database Query - Room</title>
</head>
<body>

<h1>Database Query - Room Table</h1>

<h4>Hugo STEIGER, Célian MULLER-MACHI</h4>

<p><button onclick="window.location.href = '../index.php';">Return to the main menu</button></p>

<p>---------------------------------------------------------------------------------------------------------------------------------------</p>

<p><h4>Complete table with .csv file</h4></p>
<form method = 'POST' enctype = 'multipart/form-data'>
	<p><input type="file" id="file" name="file" accept=".csv"></p>
	<p><i>/!\ Watch the number of columns and the different datatypes.</i><p>
	<p><input type="submit" name="submit" value = "Load"></p>
</form>
<p><h4>Reset the table</h4></p>
<form method = 'POST' enctype = 'multipart/form-data'>
<p><input type="submit" name="submit2" value = "Reset"></p>
</form>
<p><h4>Table display</h4></p>
 <table style="width:100%" border="1"> 
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mydb";

// Create connection
$connect = new mysqli($servername, $username, $password,$dbname);
$sql='SELECT * FROM Salle';
$result = $connect->query($sql);

echo "<tr>";
while($field = $result->fetch_field()) {
	echo "<td>".$field->name."</td>";
}
echo "</tr>";
echo "<tr>";
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "<tr>";
		$result2 = $connect->query($sql);
		while($field = $result2->fetch_field()) {
			echo "<td>".$row[$field->name]."</td>";
		}
		echo "</tr>";
		
	}
}
?>
</table>
</body>
</html>