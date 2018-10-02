<?php	
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>

<form action="prosesregis.php" method="post" enctype="multipart/form-data">
	<input type="text" name="nim" placeholder="NIM"> <span style="color: red"><?php if (isset($_SESSION["NIM"])) echo $_SESSION["NIM"]; ?></span>
	<br><br>
	<input type="text" name="nama" placeholder="Nama Lengkap"> <span style="color: red"><?php if (isset($_SESSION["Nama"])) echo $_SESSION["Nama"]; ?></span>
	<br><br>
	<input type="text" name="email" placeholder="E - Mail"> <span style="color: red"><?php if (isset($_SESSION["Email"])) echo $_SESSION["Email"]; ?></span>
	<br><br>
	Jenis Kelamin : 
	<input type="radio" name="jk" value="Laki Laki"> Laki Laki
	<input type="radio" name="jk" value="Perempuan"> Perempuan <span style="color: red"><?php if (isset($_SESSION["JK"])) echo $_SESSION["JK"]; ?></span>
	<br><br>
	Fakultas : 
	<select name="fakultas">
	  	<option value="FIT">FIT</option>
	  	<option value="FIK">FIK</option>
	  	<option value="FRI">FRI</option>
	  	<option value="FEB">FEB</option>
	  	<option value="FTE">FTE</option>
	  	<option value="FKB">FKB</option>
	  	<option value="FIF">FIF</option>
	</select>
	<span style="color: red"><?php if (isset($_SESSION["FK"])) echo $_SESSION["FK"]; ?></span>
	<br><br>
	Program Study : 
	<select name="prodi">
	  	<option value="MI">MI</option>
	  	<option value="TK">TK</option>
	  	<option value="TT">TT</option>
	  	<option value="MP">MP</option>
	  	<option value="KA">KA</option>
	  	<option value="PH">PH</option>
	  	<option value="SM">SM</option>
	  	<option value="IF">IF</option>
	</select>
	<span style="color: red"><?php if (isset($_SESSION["PD"])) echo $_SESSION["PD"]; ?></span>
	<br><br>
	Hobby : 
	<input type="checkbox" name="hobby[]" value="Programming"> Programming
  	<input type="checkbox" name="hobby[]" value="Networking"> Networking
  	<span style="color: red"><?php if (isset($_SESSION["Hobby"])) echo $_SESSION["Hobby"]; ?></span>
  	<br><br>
  	Foto : <input type="file" name="gbr">
  	<span style="color: red"><?php if (isset($_SESSION["Foto"])) echo $_SESSION["Foto"]; ?></span>
  	<br><br>
	<input type="submit" name="Regist">
</form>

</body>
</html>

<?php	
session_unset();
?>