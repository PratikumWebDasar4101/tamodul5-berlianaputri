<?php

session_start();

$_SESSION["NIM"] = "";
$_SESSION["Nama"] = "";
$_SESSION["FK"] = "";
$_SESSION["PD"] = "";
$_SESSION["Hobby"] = "";
$_SESSION["Foto"] = "";
$_SESSION["Email"] = "";
$_SESSION["JK"] = "";

$nim = htmlspecialchars(stripcslashes(trim($_POST['nim'])));
$nama = htmlspecialchars(stripcslashes(trim($_POST['nama'])));
$email = htmlspecialchars(stripcslashes(trim($_POST['email'])));
$fakultas = htmlspecialchars(stripcslashes(trim($_POST['fakultas'])));
$prodi = htmlspecialchars(stripcslashes(trim($_POST['prodi'])));
$jk = $_POST['jk'];
//$foto = htmlspecialchars(stripcslashes(trim($_POST['gbr'])));

$ctr = 0;

if ($nim == "") {
	$ctr = 1;
	$_SESSION["NIM"] = "*NIM tidak boleh kosong";
}elseif (strlen($nim) <> 10 && !is_numeric($nim)) {
	$ctr = 1;
	$_SESSION["NIM"] = "*NIM harus 10 dan berupa angka";
}elseif (strlen($nim) <> 10){
	$ctr = 1;
	$_SESSION["NIM"] = "*NIM harus 10 angka";
}

if ($nama == "") {
	$ctr = 1;
	$_SESSION["Nama"] = "*Nama tidak boleh kosong";
}

if ($email == "") {
	$ctr = 1;
	$_SESSION["Email"] = "*Email tidak boleh kosong";
}

if (filter_var($email, FILTER_VALIDATE_EMAIL)){

}else{
	$ctr = 1;
	$_SESSION["Email"] = "*Format Email tidak valid";
}

if ($fakultas == "") {
	$ctr = 1;
	$_SESSION["FK"] = "*Fakultas tidak boleh kosong";
}

if ($prodi == "") {
	$ctr = 1;
	$_SESSION["PD"] = "*Prodi tidak boleh kosong";
}

if ($jk == "") {
	$ctr = 1;
	$_SESSION["JK"] = "*Jenis kelamin tidak boleh kosong";
}

if (empty($_POST['hobby'])) {
	$ctr = 1;
	$_SESSION["Hobby"] = "*Hobby tidak boleh kosong";
}

if (empty($_FILES['gbr'])) {
	$ctr = 1;
	$_SESSION["Foto"] = "*Foto tidak boleh kosong";
}

if ($ctr == 1) {
	header("Location: registrasi.php");
}else{
	echo "NIM : " . $_POST['nim'];
	echo "<br>";
	echo "Nama : " . $_POST['nama'];
	echo "<br>";
	echo "Email : " . $_POST['email'];
	echo "<br>";
	echo "Jenis kelamin : " . $_POST['jk'];
	echo "<br>";
	echo "Fakultas : " . $_POST['fakultas'];
	echo "<br>";
	echo "Prodi : " . $_POST['prodi'];
	echo "<br>";
	foreach ($_POST['hobby'] as $hby) {
		echo "Hobby : " . $hby;
		echo "<br>";
	}
	$nama = $_FILES['gbr']['name'];
	if (isset($_POST['Regist'])) {
		move_uploaded_file($_FILES['gbr']['tmp_name'], "upload/".$_FILES['gbr']['name']); 
		echo "<img src='upload/$nama' width=200px>";
	}

}

?>