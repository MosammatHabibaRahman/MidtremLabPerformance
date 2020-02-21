<?php
	session_start();
?>
<!DOCTYPE html> 
<html>
	<head>
		<title>Registration Page</title>
	</head>
	<body>
		</br>
		</br>
		</br>
		</br>
		</br>
		<form method="POST" action="Check.php">
			<center>
				<table border=1 width=350>
					<tr>
						<td colspan=3><center><h3>PERSON PROFILE</h3></center></td>
					</tr>
					<tr>
						<td>Name</td>
						<td width=200><input type="text" name="name" value=""/></td>
						<td width=25></td>
					</tr>
					<tr>
						<td>Email</td>
						<td width=200><input type="text" name="email" value=""/></td>
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
							<input type="text" name="day" value="" size=3/>/
							<input type="text" name="month" value="" size=3/>/
							<input type="text" name="year" value="" size=3/>
							<i> dd/mm/yyyy</i>
						</td>
						<td width=25></td>
					</tr>
					<tr>
						<td>Blood Group</td>
						<td width=200>
							<select name="select">
								<option></option>
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
							<input type="checkbox" name="ssc"/>SSC
							<input type="checkbox" name="hsc"/>HSC
							<input type="checkbox" name="bsc"/>BSc.
							<input type="checkbox" name="msc"/>MSc.
						</td>
						<td width=25></td>
					</tr>
					<tr>
						<td>Photo</td>
						<td colspan=2 width=150>
							<input type="file" id="browse" name="browse"/>
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