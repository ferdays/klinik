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
	<title>Klinik | Edit Data</title>
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
		<a href='dokter.php'><div class='menukiri1'>
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
		<div class='menukiri1-active'>
			<font class='k' style='margin-left:95px;margin-top:15px;display:inline-block;'>Edit data pasien</font>
		</div>
		</a>
		<br><br>
		<a href="javascript:history.back()"><img src='../img/back.png' height='50' style='margin-left:95px;'></a>
		<a href="frontoffice.php"><img src='../img/home.png' height='50' style='margin-left:55px;'></a>	</div>
	<div id='kanan'>
		<a href='lihatbaru.php'><font class='k' style='color:white;margin-top:20px;margin-left:20px;display:inline-block;'>Pasien Baru</font></a><a href='lihatlama.php'><font class='k' style='color:#2C3E50;margin-top:20px;margin-left:50px;display:inline-block;'>Pasien Lama</font></a><br>
<?php
require_once('../koneksi.php');
$query1="select * from databaru ";
$result=mysql_query($query1) or die(mysql_error());
while($rows=mysql_fetch_object($result)){
      ?>
		<div id='name'>
			<font class='b'><?php echo $rows -> nama;?></font>
			<div class='tampil'>
				<a href='edit.php?idpasien=<?php echo $rows -> id;?>'><img src='../img/edit.png' height='50'></a>
				<a href='delete.php?idpasien=<?php echo $rows -> id;?>'><img src='../img/delete.png' height='50'></a>
			</div>
	</div>
	<?php
}
	?>
</body>
</html>