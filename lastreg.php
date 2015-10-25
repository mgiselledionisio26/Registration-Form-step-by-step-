<?php
$first_name = $_POST['f_name'];
$middle_name = $_POST['m_name'];
$last_name = $_POST['l_name'];
$gender = $_POST['gender'];
// Birthday
$month = $_POST['month'];
$day= $_POST['day'];
$year= $_POST['year'];
// Program and student type
$program = $_POST['program'];
$studentType= $_POST['status'];
$address = $_POST['text'];
?>
<link rel="stylesheet" type="text/css" href="style.css">
First Name: <strong><?php echo $first_name; ?></strong><br />
Middle Name: <strong><?php echo $middle_name; ?></strong><br />
Last Name: <strong><?php echo $last_name; ?></strong><br />
Gender: <strong><?php echo $gender; ?></strong><br />
Birthday: <strong><?php echo $month, " ", $day,",", " " ,$year; ?></strong><br />
Program: <strong><?php echo $program; ?></strong><br />
Student Type: <strong><?php echo $status; ?></strong><br />
Address: <pre><?php echo $text; ?></pre><br />
