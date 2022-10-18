<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php
if(!empty($_GET)){
    $student = [];
    $student['School/University'] = $_GET['school'];
    $student['School_ID_No.'] = $_GET['scid'];
    $student['Student_ID_No.'] = $_GET['idno'];
    $student['Last_Name'] = $_GET['lname'];
    $student['First_Name'] = $_GET['fname'];
    $student['Middle_Initial'] = $_GET['mname'];
    $student['Track'] = $_GET['tracks'];

    
    $studentArray = [];
    array_push($studentArray, $student);
    $str = print_r($studentArray, true);
    file_put_contents('student.txt', $str, FILE_APPEND);
}
?>

<div>
	<form action="" method="GET">
		<h4>School/University</h4>
		<label><select name="school">
			<option selected="selected">University of the Cordilleras</option>
			<option>University of Baguio</option>
			<option>University of the Philippines</option></select></label><br/>

			<div>
				<label>School ID No.<input type="text" name="scid" size="10" /></label><br>
			</div>
			<label><b><em>Baguio City, Philippines</em></b></label>
			<div>
				<h4>Student Information</h4>
				<label>Student ID No.:&nbsp;<input type="text" name="idno" size="15" /></label><br>
				<label>Last Name:&emsp;&ensp;&ensp;<input type="text" name="lname" size="15" /></label><br>
				<label>First Name:&emsp;&ensp;&nbsp;<input type="text" name="fname" size="15" /></label><br>
				<label>Middle Initial:&ensp;&nbsp;<input type="text" name="mname" size="5" maxlength="1" /></label><br>
			</div>
			<h5>CITCS Tracks</h5>
			<div>
				<input type="radio" name="tracks" value="webtech" checked="checked">Web Development<br>
				<input type="radio" name="tracks" value="netsec">Network Security<br>
				<input type="radio" name="tracks" value="erp">ERP<br><br />
				<input type="submit">
			</div>
	</form>
</body>
</html>