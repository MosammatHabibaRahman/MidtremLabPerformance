<?php
	session_start();
?>
<!DOCTYPE html> 
<html>
	<head>
		<title>Registration Page</title>
	</head>
	<body>
		<form method="POST" action="Check.php">
			<center>
				<table border=1 width=350>
					<tr>
						<td colspan=3><center><h3>PERSON PROFILE</h3></center></td>
					</tr>
					<tr>
						<td>Name</td>
						<td width=200><input type="text" name="name" value="" size=10/></td>
						<td width=25></td>
					</tr>
					<tr>
						<td>Email</td>
						<td width=200><input type="text" name="email" value="" size=10/></td>
						<td width=25></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td width=200>
							<input type="radio" name="gender" value="Male"/> Male
							<input type="radio" name="gender" value="Female"/> Female
							<input type="radio" name="gender" value="Other"/> Other
						</td>
						<td width=25></td>
					</tr>
					<tr>
						<td>Date of Birth</td>
						<td width=200>
							<input type="text" name="day" value="" size=1/>/
							<input type="text" name="month" value="" size=1/>/
							<input type="text" name="year" value="" size=1/>
							<i>dd/mm/yyyy</i>
						</td>
						<td width=25></td>
					</tr>
					<tr>
						<td>Blood Group</td>
						<td width=200>
							<select>
								<option>A+</option>
								<option>B+</option>
								<option>AB</option>
								<option>O</option>
							</select>
						</td>
						<td width=25></td>
					</tr>
					<tr>
						<td>Degree</td>
						<td width=200>
							<input type="checkbox" name="SSC">SSC/>
							<input type="checkbox" name="HSC">HSC/>
							<input type="checkbox" name="BSc">BSc./>
							<input type="checkbox" name="MSc">MSc./>
						</td>
						<td width=25></td>
					</tr>
					<tr>
						<td>Photo</td>
						<td colspan=2 width=150>
							<input type="file" name="Browse" value="Browse"/>
						</td>
					</tr>
					<tr>
						<td colspan=3><p></p></td>
					</tr>
					<tr>
						<td colspan=3><input type="submit" name="submit" value="submit"/> <input type="reset" name="reset" value="reset"/></td>
					</tr>
				</table>
			</center>
		</form>
	</body>
</html>