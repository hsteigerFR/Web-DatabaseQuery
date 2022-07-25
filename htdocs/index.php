<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Database Query - Main Menu</title>

<script type="text/javascript">
function Redirection(f)
{
var i = f;
switch(i) {
case 0:
window.location.href ='pages/acte.php';
break;

case 1:
window.location.href ='pages/hospitalisation.php';
break;

case 2:
window.location.href ='pages/infirmier.php';
break;

case 3:
window.location.href ='pages/medecin.php';
break;

case 4:
window.location.href ='pages/patient.php';
break;	

case 5:
window.location.href ='pages/salle.php';
break;	

case 6:
window.location.href ='pages/service.php';
break;	
} 
} 

</script>

</head>
<body>

<h1>Database Query - Main Menu</h1>

<h4>Hugo STEIGER, Célian MULLER-MACHI</h4>

<p><button onclick="window.open('scripts/create_database.php');">Create the database</button><button onclick="window.open('scripts/drop_database.php');">Delete the database</button></p>

<p>--------------------------------------------------------------------------------------------------------------------------------------------------</p>


<p>
<label>* Select a table : </label>
<select name="tables" id="tables">
<option>Deed</option>
<option>Hospitalization</option>
<option>Nurse</option>
<option>Physician</option>
<option>Patient</option>
<option>Room</option>
<option>Department</option>
</select>
<input type = "submit" value="Change" onclick="Redirection(tables.selectedIndex);">
</p>

<p>* <button onclick="window.location.href = 'pages/interrogations.php';">Query</button></p>

<p><img src="images/database_img.png" width="700" height="400"></p>

</body>
</html>

