 <?php
 //DATABASE
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed : " . $conn->connect_error . ". ");
}

// Create database
$sql = "DROP DATABASE myDB";

if ($conn->query($sql) === TRUE) {
    echo "myDB database successfully deleted.";
} else {
    echo "Database deletion failed : " . $conn->error . ". ";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<title>Database Query - Drop myDB</title>
</head>
</html>