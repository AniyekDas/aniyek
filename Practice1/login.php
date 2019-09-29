<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm">
		<form action="process.php" method="POST">
			<p>
				<label><font face="Georgia"><b>Username: </b></font></label>
				<input type="text" id ="user" name="user" />
			</p>
			<p>
				<label><font face="Georgia"><b>Password: </b></label>
				<input type="Password" id ="pass" name="pass" />
			</p>
			<p>
				<input type="submit" id="btn" name="Login" value="Login" />
			</p>
		</form>
	</div>
</body>
</html>