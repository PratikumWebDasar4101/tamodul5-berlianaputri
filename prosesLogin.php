<?php 

session_start();

$_SESSION["NIM"] = "";
$_SESSION["Pass"] = "";

$nim = htmlspecialchars(stripcslashes(trim($_POST['NIM'])));
$pass = htmlspecialchars(stripcslashes(trim($_POST['Pass'])));

if ($nim == "") {
	$_SESSION["NIM"] = "NIM tidak boleh kosong";
}elseif (strlen($nim) <> 10 && !is_numeric($nim)) {
	$_SESSION["NIM"] = "NIM harus 10 dan berupa angka";
}elseif (strlen($nim) <> 10){
	$_SESSION["NIM"] = "NIM harus 10 angka";
}

if ($pass == "") {
	$_SESSION["Pass"] = "Password tidak boleh kosong";
}elseif (strlen($pass) < 6) {
	$_SESSION["Pass"] = "Password minimal 6 karakter";
}

if ($_SESSION["Pass"] != "" || $_SESSION["NIM"] != "") {
	header("Location: login.php");
}else{
	echo "Access Granted";
}

?>
