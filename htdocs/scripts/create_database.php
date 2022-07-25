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
$sql = "CREATE DATABASE myDB";

if ($conn->query($sql) === TRUE) {
    echo "myDB database successfully created. ";
} else {
    echo "Database creation failed : " . $conn->error . ". ";
}

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

//TABLES

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed : " . $conn->connect_error . ". ");
}

// sql to create table
$sql = "CREATE TABLE Acte (
NumMed INT,
NumPat INT,
DateActe DATE,
NumService INT,
Description VARCHAR(50),
PRIMARY KEY (NumMed,NumPat,DateActe)
)";

$sql2 = "CREATE TABLE Hospitalisation (
NumPat INT,
DateEntree DATE,
NumSalle INT,
NumService INT,
DateSortie DATE,
PRIMARY KEY (NumPat,DateEntree,NumSalle)
)";

$sql3= "CREATE TABLE Infirmier (
NumInf INT,
Nom VARCHAR(50),
Adresse VARCHAR(50),
Telephone INT,
PRIMARY KEY (NumInf)
)";

$sql4="CREATE TABLE Medecin (
NumMed INT,
nom VARCHAR(50),
Specialite VARCHAR(50),
PRIMARY KEY (NumMed)
)";

$sql5="CREATE TABLE Patient (
NumPat INT,
Nom VARCHAR(200),
Prenom VARCHAR(50),
Mutuelle VARCHAR(50),
PRIMARY KEY (NumPat)
)";

$sql6="CREATE TABLE Salle (
NumSalle INT,
NumService INT,
Nblits INT,
PRIMARY KEY (NumSalle,NumService)
)";

$sql7="CREATE TABLE Service (
NumService INT,
Nom VARCHAR(50),
Batiment VARCHAR(1),
NumMed INT,
PRIMARY KEY (NumService)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Deed successfully created. ";
} else {
    echo "Error creating Deed table : " . $conn->error . ". ";
}

if ($conn->query($sql2) === TRUE) {
    echo "Table Hospitalization successfully created.";
} else {
    echo "Error creating Hospitalization table : " . $conn->error . ". ";
}

if ($conn->query($sql3) === TRUE) {
    echo "Table Nurse successfully created.";
} else {
    echo "Error creating Nurse table : " . $conn->error . ". ";
}

if ($conn->query($sql4) === TRUE) {
    echo "Table Physician successfully created.";
} else {
    echo "Error creating Physician table : " . $conn->error . ". ";
}

if ($conn->query($sql5) === TRUE) {
    echo "Table Patient successfully created.";
} else {
    echo "Error creating Patient table : " . $conn->error . ". ";
}

if ($conn->query($sql6) === TRUE) {
    echo "Table Room successfully created.";
} else {
    echo "Error creating Room table : " . $conn->error . ". ";
}

if ($conn->query($sql7) === TRUE) {
    echo "Table Department successfully created.";
} else {
    echo "Error creating Department table : " . $conn->error . ". ";
}

$conn->close();
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<title>Database Query - Create myDB</title>
</head>
</html>