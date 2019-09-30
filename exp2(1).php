<!DOCTYPE html>
<html>
<head>
	<title> CV Generator </title>
	<link rel="stylesheet" type = "text/css" href="style.css">
	<style>
			p.one {
  					border-style: solid;
  					border-color: red;
					}
			p.two {
  					border-style: solid;
  					border-color: green;
					} 
			p.three {
  					border-style: solid;
  					border-color: red green blue yellow;
					}
			h2.high	{
					font-family: Cambria;
					background-color: #dddddd;
					}
			table 	{
  					font-family: arial, sans-serif;   border-collapse: collapse;   width: 100%;
					}
			td, th {
  					border: 1px solid #dddddd;   text-align: left;   padding: 8px;
					}
			div.a
					{
					padding: 35px 70px;
					}
			.img: 
					{
					align:right;
					}
			.rotateimg270
					{
 					-webkit-transform:rotate(270deg);
  					-moz-transform: rotate(270deg);
  					-ms-transform: rotate(270deg);
  					-o-transform: rotate(270deg);
  					transform: rotate(270deg);
					}
			
			</style>
</head>
<body>
	<div class = "contact-title">
		<h1>CV _ GENERATOR</h1>
		<h2>Build Your First CV </h2>
	</div>
	
	<div class = "contact-form">
		<form method="POST" >
		<input name = "name" type="text" class ="form-control" placeholder="Your Name" required>
		<br>
		<!--<input name = "Lname" type="text" class ="form-control" placeholder="Your LastName" required>
		<br>
		<input name ="email" type="email" class="form-control" placeholder="Your Email" required></textarea><br>
		<br>
		<input name ="branch" type="text" class="form-control" placeholder="Your Branch" required></textarea><br>
		<br>
		<input name = "Year" type="number" class ="form-control" placeholder="Your Study Year" required></textarea><br>
		<br>
		<input name = "Fathername" type="text" class ="form-control" placeholder="Your Fathers Name" required></textarea><br>
		-->
		
		<!--<input name = "email" type="email" class ="form-control" placeholder="Message" row = "4" requied></textarea><br>
		-->
		<input name = "address1" type="text" class ="form-control" placeholder="College Name" required>
		<br>
		<input name = "address2" type="text" class ="form-control" placeholder="Area" required>
		<br>
		<input name = "address3" type="text" class ="form-control" placeholder="City,State" required>
		<br>
		
		<input name = "phoneno" type="number" class ="form-control" placeholder="Phone No." required>
		<br>
		<input name = "email" type="email" class ="form-control" placeholder="Email" required>
		<br>
		<input name = "career_objective" type="text" class ="form-control" placeholder="Career Objective" required>
		<br>
		<input name = "ayear1" type="number" class ="form-control" placeholder="Xth Completion Year" required>
		<br>
		<input name = "ayear2" type="number" class ="form-control" placeholder="XIIth Completion Year" required>
		<br>
		<input name = "board1" type="text" class ="form-control" placeholder="Xth Board Name" required>
		<br>
		<input name = "board2" type="text" class ="form-control" placeholder="XIIth Board Name" required>
		<br>
		<input name = "col1" type="text" class ="form-control" placeholder="Xth College/Institute Name" required>
		<br>
		<input name = "col2" type="text" class ="form-control" placeholder="XIIth College/Institute Name" required>
		<br>
		<input name = "per1" type="number" class ="form-control" placeholder="Xth Percentage/CGPA" required>
		<br>
		<input name = "per2" type="number" class ="form-control" placeholder="XIIth Percentage/CGPA" required>
		<br>
		<input name = "tr_pr" type="text" class ="form-control" placeholder="Training & Projects Undertaken" required>
		<br>
		<input name = "cs_sk_lang" type="text" class ="form-control" placeholder="Computer Languages Known" required>
		<br>
		<input name = "cs_sk_other" type="text" class ="form-control" placeholder="Technical Platforms Known" required>
		<br>
		<input name = "dob" type="text" class ="form-control" placeholder="Date Of Birth" required>
		<br>
		<input name = "Fname1" type="text" class ="form-control" placeholder="Father's Name" required>
		<br>
		<input name = "Mname1" type="text" class ="form-control" placeholder="Mother's Name" required>
		<br>
		<input name = "Category" type="text" class ="form-control" placeholder="Category" required>
		<br>
		<input name = "Gender" type="text" class ="form-control" placeholder="Gender" required>
		<br>
		<input name = "Nationality" type="text" class ="form-control" placeholder="Nationality" required>
		<br>
		<input name = "ht" type="text" class ="form-control" placeholder="Home Town" required>
		<br>
		<input name = "PAddress" type="text" class ="form-control" placeholder="Permanent Address" required>
		<br>
		<input name = "Languages" type="text" class ="form-control" placeholder="Speaking Languages" required>
		<br>
		<input type = "submit" name = "submit" value = "Submit">
		<!--<input type = "submit" class "form-control value ="Generate";-->
		</form>
	</div>	
	<?php
		
		$name=$address=$address2=$address3=$phoneno=$email=$career_objective=$ayear1=$ayear2=$board1=$board2=$col1=$col2=$per1=$per2=$tr_pr=$cs_sk_lang=$cs_sk_other=$dob=$Fname1=$Mname1=$Category=$Genger=$Nationality=$ht=$PAddress=$Languages=" ";
		
		   if ($_POST) {
            // $name = test_input($_POST["name"]);
            // $email = test_input($_POST["email"]);
            // $website = test_input($_POST["website"]);
            // $comment = test_input($_POST["comment"]);
            // $gender = test_input($_POST["gender"]);
			$name=test_input($_POST['name']);
			$address1=test_input($_POST['address1']);
			$address2=test_input($_POST['address2']);
			$address3=test_input($_POST['address3']);
			$phoneno=test_input($_POST['phoneno']);
			$email=test_input($_POST['email']);
			$career_objective=test_input($_POST['career_objective']);
			$ayear1=test_input($_POST['ayear1']);
			$ayear2=test_input($_POST['ayear2']);
			$board1=test_input($_POST['board1']);
			$board2=test_input($_POST['board2']);
			$col1=test_input($_POST['col1']);
			$col2=test_input($_POST['col2']);
			$per1=test_input($_POST['per1']);
			$tr_pr=test_input($_POST['tr_pr']);
			$per2=test_input($_POST['per2']);
			$cs_sk_lang=test_input($_POST['cs_sk_lang']);
			$cs_sk_other=test_input($_POST['cs_sk_other']);
			$dob=test_input($_POST['dob']);
			$Fname1=test_input($_POST['Fname1']);
			$Mname1=test_input($_POST['Mname1']);
			$Category=test_input($_POST['Category']);
			$Gender=test_input($_POST['Gender']);
			$Nationality=test_input($_POST['Nationality']);
			$ht=test_input($_POST['ht']);
			$PAddress=test_input($_POST['PAddress']);
			$LANGUAGES=test_input($_POST['Languages']);
		
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
			
            return $data;
         }
		
		
		echo"<h1 style = 'font-size:60px; font-family: Abyssinica SIL , sans-serif;'>$name</h1>";
		
		
		echo"<h2><u><b>Address of Correspondence</b></u></h2>";
		echo"<p>$address1</p><br>";
		echo"<p>$address2</p><br>";
		echo"<p>$address3</p>";
		echo"<br>";
		
		echo"<h3><b>Phone: </b>$phoneno</h3>";
		echo"<h3><b>Email: </b>$email</h3>";
			echo"<br>";
					echo"<br>";
						
		echo"<h2 class='high'>CAREER OBJECTIVE</h2>";
		echo"<p><i>$career_objective</i></p>";
		echo"<br>";
		echo"<h2 class='high'>ACADEMIC BACKGROUND</h2>";

		echo"<table>
			
			<tr>		<th>Year(s)</th>		<th>Qualification</th>			<th>Board/University</th>		<th>College/Institue/University</th>		<th>Percentage/CGPA</th>		</tr>
			<tr>		<td>$ayear1</td>		<td>10th</td>			<td>$board1</td>		<td>$col1</td>		<td>$per1</td>		</tr>
			<tr>		<td>$ayear2</td>		<td>12th</td>			<td>$board2</td>		<td>$col2</td>		<td>$per2</td>		</tr>
			
		</table>";		
				
			echo"<h2 class='high' > TRAINING & PROJECTS UNDERTAKEN</h2>";
			/*<ul>
				<li>CLOUD WORKSHOP AND TRAINING PROGRAM BY MICROSOFT TECHNICAL COMUNITY</li>
				<li>LINKEDIN AND CV BUILDING WORKSHOP</li>
				<li>MICROSOFT AZURE WORKSHOP CONDUCTED BY MICROSOFT TECHNICAL COMUNITY</li>
				<li>GITHUB WORKSHOP BY CODING NINJA'S</li>
			</ul>*/
			echo"$tr_pr";
			echo"<br>";
		echo"<h2 class = 'high'>COMPUTER SKILLS</h2>";
		
		echo"<h3><b>LANGUAGES : $cs_sk_lang<br> </h3>";
			echo"<h3>OTHERS   : $cs_sk_other.<b></h3> ";
			echo"<br>";
				echo"<h2 class = 'high'>PERSONAL DETAILS</h2>";
				echo"<table style = 'font-size:18px;'>
					<tr>		<td>Date Of Birth</td>		<td>:</td>		<td><b>$dob</b></td>		</tr>
					<tr>		<td>Father's Name</td>		<td>:</td>		<td><b>$Fname1</b></td>		</tr>
					<tr>		<td>Mother's Name</td>		<td>:</td>		<td><b>$Mname1</b></td>		</tr>
					<tr>		<td>Category</td>		<td>:</td>			<td><b>$Category</b></td>		</tr>
					<tr>		<td>Gender</td>		<td>:</td>		<td><b>$Gender</b></td>		</tr>
					<tr>		<td>Nationality</td>		<td>:</td>		<td><b>$Nationality</b></td>		</tr>
					<tr>		<td>Home Town</td>		<td>:</td>		<td><b>$ht</b></td>		</tr>
					<tr>		<td>Permanent Address</td>		<td>:</td>		<td><b>$PAddress</b></td>		</tr>
					<tr>		<td>Phone No.</td>		<td>:</td>		<td><b>$phoneno</b></td>		</tr>
					<tr>		<td>Languages Known</td>		<td>:</td>		<td><b>$LANGUAGES</b></td>		</tr>";
		
	?>				
	
</body>
</html>