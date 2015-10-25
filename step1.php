<!DOCTYPE>
<html>
<head>
<title> STUDENT REGISTRATION FORM </title>
<link href="studentreg.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<form method="GET" action="step2.php">

<div class='title'> STUDENT REGISTRATION </div>
	<table cellspacing="0" cellpadding="10">
	<tr class='line'>
		<td width="161" class='row'>First Name </td>
		<td width="161" class='row'>Middle Name</td>
		<td width="161" class='row'> Last Name </td>
	</tr>
	<tr>
		<td><input type ="text" name="f_name" size ="20" placeholder="Ma Giselle" required></td>
		<td><input type ="text" name="m_name" size ="20" placeholder="Olvina" required></td>
		<td><input type ="text" name="l_name" size ="20" placeholder="Dionisio" required></td>
	</tr>
	<tr>
		<td colspan="3" align="right"> <input type="submit" value="Proceed to Next Step>>"> </td>
	</tr> 
	</table>
</div>