<!DOCTYPE html>
<html>
<head>
	<title>Regex Validasi</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="user" required placeholder="Username" pattern="^[a-z][a-z5-9\.]{1,10}$">
		<input type="text" name="password" required placeholder="Password" pattern="(?=^.{10,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
		<input type="submit" name="login">
	</form>
</body>
</html>