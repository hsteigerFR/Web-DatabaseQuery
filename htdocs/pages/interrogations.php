<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mydb";

// Create connection
$connect = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($connect->connect_error) {
    echo "<script>alert(Connection failed : please check if the database exists.');</script>";
	echo "<script>window.location.href = '../index.php';</script>";
}
$connect->close();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Database Query - Questions</title>
</head>
<body>

<h1>Database Query - Questions</h1>

<h4>Hugo STEIGER, Célian MULLER-MACHI</h4>

<p><button onclick="window.location.href = '../index.php';">Return to the main menu</button></p>

<p>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>

<p>* Q1) Who are the patients who were registered at a given date ? </p>
<p><button onclick="window.open('../questions/q1.php')">Answer Q1</button></p>

<p>* Q2) Which oncologists are also department managers ? </p>
<p><button onclick="window.open('../questions/q2.php')">Answer Q2</button></p>

<p>* Q3) How many beds are located in each departement ? </p>
<p><button onclick="window.open('../questions/q3.php')">Answer Q3</button></p>

<p>* Q4) How many free beds were in each room of the cardiology departement on the 04/07/2018 (french date convention) ?</p>
<p><button onclick="window.open('../questions/q4.php')">Answer Q4</button></p>

<p>* Q5) Which patients never met a cardiologist ? </p>
<p><button onclick="window.open('../questions/q5.php')">Answer Q5</button></p>

<p>* Q6) Which patients received at least one deed in all departments ? </p>
<p><button onclick="window.open('../questions/q6.php')">Answer Q6</button></p>

<p>* Q7) Who are the physicians + their specialty and the name of the patient, who 
treated a patient that has a deed in all of the hospital departments ? The 
results will be sorted by physician. </p>
<p><button onclick="window.open('../questions/q7.php')">Answer Q7</button></p>

<p>* Q8) Which patients always remained at least two weeks as regards all their hospitalizations ? </p>
<p><button onclick="window.open('../questions/q8.php')">Answer Q8</button></p>

<p>* Q9) Which patients were always treated without being hospitalized ? </p>
<p><button onclick="window.open('../questions/q9.php')">Answer Q9</button></p>

<p>* Q10) Which departements have only treated non hospitalized patients ?</p>
<p><button onclick="window.open('../questions/q10.php')">Answer Q10</button></p>

<p>* Q11) Who are the patients + the department, who had deeds in only one departement ?</p>
<p><button onclick="window.open('../questions/q11.php')">Answer Q11</button></p>

<p>* Q12) Which are the departments where most of the patients were hospitalized for at least 2 days ?</p>
<p><button onclick="window.open('../questions/q12.php')">Answer Q12</button></p>

<p>* Q13) Who are the patients who were hospitalized for more than 3 days and who do not
own the MUT health mutual ? </p>
<p><button onclick="window.open('../questions/q13.php')">Answer Q13</button></p>

<p>* Q14) What is the average number of (different) patients per physician ?</p>
<p><button onclick="window.open('../questions/q14.php')">Answer Q14</button></p>

<p>* Q15) What is the average number of deeds per day over all the physicians ?</p>
<p><button onclick="window.open('../questions/q15.php')">Answer Q15</button></p>

<p>* Q16) Bonus : What are the different first names of the patients that were hospitalized in building B ?</p>
<p><button onclick="window.open('../questions/q16.php')">Answer Q16</button></p>

<p>* Q17) Bonus : Which building contains the least beds ? </p>
<p><button onclick="window.open('../questions/q17.php')">Answer Q17</button></p>

<p>* Q18) Bonus : What is the average number of travels to the hospital for the same patient ?</p>
<p><button onclick="window.open('../questions/q18.php')">Answer Q18</button></p>

<p>* Q19) Bonus : What is the city most of nurses come from ?</p>
<p><button onclick="window.open('../questions/q19.php')">Answer Q19</button></p>

</body>
</html>