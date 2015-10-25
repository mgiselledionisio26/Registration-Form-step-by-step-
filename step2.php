<?php 
	
	$first_name = $_GET ['f_name'];
	$middle_name = $_GET ['m_name'];
	$last_name = $_GET ['l_name'];

?>
<!DOCTYPE>
<html>
<head>
<title> STUDENT REGISTRATION FORM </title>
<link href="studentreg.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<form method="GET" action="step3.php">

<div class='title'> STUDENT REGISTRATION </div>
	<table cellspacing="0" cellpadding="10">
	<tr class='line'>
		<td width="161" class='row'>First Name </td>
		<td width="161" class='row'>Middle Name</td>
		<td width="161" class='row'> Last Name </td>
	</tr>
	<tr>
		<td><input type ="text" name="f_name" size ="20" placeholder="Ma Giselle" required 
		value="<?php echo $first_name;?>"></td>
		<td><input type ="text" name="m_name" size ="20" placeholder="Olvina" required
		value="<?php echo $middle_name;?>"></td>
		<td><input type ="text" name="l_name" size ="20" placeholder="Dionisio" required
		value="<?php echo $last_name;?>"></td>
	</tr>
	<tr>
		<td>Gender </td>
		<td><input type ="radio" name="gender" value="male">Male </td>
		<td><input type ="radio" name="gender" value="female">Female </td>
	</tr>
	<tr>
		<td colspan="3" align="right"> <input type="submit" value="Proceed to Next Step>>"> </td>
	</tr> 
	</table>
</div>