<?php 
	
	$first_name = $_GET ['f_name'];
	$middle_name = $_GET ['m_name'];
	$last_name = $_GET ['l_name'];

	$gender = $_GET ['gender'];
	// BIRTHDAY
	$month = $_GET ['month'];
	$day = $_GET ['day'];
	$year = $_GET ['year'];

	$program = $_GET ['program'];
	$status = $_GET ['status'];
?>
<!DOCTYPE>
<html>
<head>
<title> STUDENT REGISTRATION FORM </title>
<link href="studentreg.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<form method="GET" action="step5.php">

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
		<td><input type ="radio" name="gender" value="male"<?php if ($gender == "male") echo "checked='checked'";?> >Male </td>
		<td><input type ="radio" name="gender" value="female"<?php if ($gender == "female") echo "checked='checked'";?> >Female </td>
	</tr>
	<tr>
		<td colspan="3"> Birthday </td>
     </tr>
     <tr>
		<td>Month <select name="month" >  
			<option value= "<?php echo $month;?>"> <?php echo $month;?> </option>
			<option> January </option>
			<option> February </option>
			<option> March </option>
			<option> April </option>
			<option> May </option>
			<option> June </option>
			<option> July </option>
			<option> August </option>
			<option> September </option>
			<option> October </option>
			<option> November </option>
			<option> December </option>
			</select>
		</td>
		<td>Day <select name="day">
			<option value = "<?php echo $day;?>"><?php echo $day;?> </option>
			<option> 1 </option>
			<option> 2 </option>
			<option> 3 </option>
			<option> 4 </option>
			<option> 5 </option>
			<option> 6 </option>
			<option> 7 </option>
			<option> 8 </option>
			<option> 9 </option>
			<option> 10 </option>
			<option> 11 </option>
			<option> 12 </option>
			<option> 13 </option>
			<option> 14 </option>
			<option> 15 </option>
			<option> 16 </option>
			<option> 17 </option>
			<option> 18 </option>
			<option> 19 </option>
			<option> 20 </option>
			<option> 21 </option>
			<option> 22 </option>
			<option> 23 </option>
			<option> 24 </option>
			<option> 25 </option>
			<option> 26 </option>
			<option> 27 </option>
			<option> 28 </option>
			<option> 29 </option>
			<option> 30 </option>
			<option> 31 </option>
			</select>
		</td>	
		<td>Year <select name="year">
			<option value="<?php echo $year;?>"> <?php echo $year;?></option>
			<option> 1990 </option>
			<option> 1991 </option>
			<option> 1992 </option>
			<option> 1993 </option>
			<option> 1994 </option>
			<option> 1995 </option>
			<option> 1996 </option>
			<option> 1997 </option>
			<option> 1998 </option>
			<option> 1999 </option>
			</select>
		</td>
	</tr>	
	<tr> 
		<td>Program </td>
		 <td colspan="2"><select name="program">
		    <option value ="<?php echo $program;?>"> <?php echo $program;?></option>
		    <option> AB Broadcasting </option>
		    <option> BS Information Systems</option>
		    <option> BS Accounting Technology </option>
		    <option> BS Accountancy </option>
		    <option> BS Social Works </option>
		    <option> Associate in Computer Technology </option>
		    <option> Office Management </option>
		    <option> Nursing Assistant </option>
		    <option> Mass Communication Technology </option>
        </select></td>
	</tr>
	<tr>
		<td width="486" colspan ="3">Student Type</td>
	</tr>
	<tr>
		<td colspan="3"><input type ="radio" name="status" value ="Full-Scholar" <?php if ($status == "Full-Scholar") echo "checked='checked'";?> > Full-Scholar  </br>
		<input type ="radio" name="status" value="Partial-Scholar" <?php if ($status == "Partial-Scholar") echo "checked='checked'";?> > Partial-Scholar </br>
		<input type ="radio" name="status" value="Payee" <?php if ($status == "Payee") echo "checked='checked'";?> > Payee
		</td>
	</tr>
	<tr>
		<td colspan="3" align="right"> <input type="submit" value="Proceed to Next Step>>"> </td>
	</tr> 
	</table>
</div>