<?php	
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<form action="prosesLogin.php" method="post">
		<input type="text" name="NIM" placeholder="NIM"> <span style="color: red"><?php if (isset($_SESSION["NIM"])) echo $_SESSION["NIM"]; ?></span>
		<br> <br>
		<input type="Password" name="Pass" placeholder="Password"> <span style="color: red"><?php if (isset($_SESSION["Pass"])) echo $_SESSION["Pass"]; ?></span>
		<br> <br>
		<input type="Submit" value="Submit">
	</form>
</body>
</html>

<?php	
session_unset();
?>