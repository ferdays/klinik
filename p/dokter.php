<?php
session_start();

if(!isset($_SESSION['userid'])){
    die("Anda belum login");
}

if($_SESSION['level']!="frontoffice"){
    die("Anda bukan admin");
}
?>
<html>
<head>
	<title>Klinik | Tambah Data Pasien Dokter</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body id='fitur'>
	<div id='menukiri'>
		<center><font class='b' style='color:#4B77BE;'> Front Office <font class='k' style='color:#4B77BE;'>Features</font> </font></center>
<a href='pasienbaru.php'>
		<div class='menukiri1'>
			<font class='k' style='margin-left:95px;margin-top:15px;display:inline-block;'>Tambah data pasien baru</font>
		</div>
		</a>
		<a href='dokter.php'><div class='menukiri1-active'>
			<font class='k' style='margin-left:95px;margin-top:15px;display:inline-block;'>Tambah data Dokter</font>
		</div>
		</a>
		<a href='lihatdata.php'>
		<div class='menukiri1'>
			<font class='k' style='margin-left:95px;margin-top:15px;display:inline-block;'>Lihat data pasien</font>
		</div>
		</a>
		<a href='lihatdokter.php'>
		<div class='menukiri1'>
			<font class='k' style='margin-left:95px;margin-top:15px;display:inline-block;'>Lihat data dokter</font>
		</div>
		</a>
		<a href='editdata.php'>
		<div class='menukiri1'>
			<font class='k' style='margin-left:95px;margin-top:15px;display:inline-block;'>Edit data pasien</font>
		</div>
		</a>		<br><br>
		<a href="javascript:history.back()"><img src='../img/back.png' height='50' style='margin-left:95px;'></a>
		<a href="frontoffice.php"><img src='../img/home.png' height='50' style='margin-left:55px;'></a>
	</div>
	<div id='kanan'>
		<font class='k' style='color:white;margin-top:20px;margin-left:20px;display:inline-block;'>Tambah data Dokter</font><br>
		<font class='sk' style='color:white;margin-top:20px;margin-left:20px;display:inline-block;'>Anda dapat memasukkan data Dokter disini, silahkan isi form yang telah disediakan</font><br><br>

		<form action='insertdokter.php' method='post'>
		<label for='usernamepasien'><font class='sk' style='color:white;margin-left:20px;display:inline-block;'>Username</font></label>
		<br><input name='username' type='text' id='username'><br>
		<label for='passwordpasien'><font class='sk' style='color:white;margin-left:20px;display:inline-block;'>Password</font></label>
		<br><input name='password' type='password' id='password' required><br>
		<label for='nama'><font class='sk' style='color:white;margin-left:20px;display:inline-block;'>Nama Dokter</font></label>
		<br><input name='nama' type='text' id='lainlain' required><br>
		<input type='submit' id='submit2' value='Submit'>
		</form>
	</div>
</body>
</html>