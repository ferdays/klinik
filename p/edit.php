<?php
include ('../koneksi.php');
if($_POST){
	$sql = "update databaru set nama='{$_POST['nama']}',umur='{$_POST['umur']}',gejala='{$_POST['gejala']}',penyakitsebelum='{$_POST['penyakitsebelum']}' where id='{$_POST['id']}'";
	mysql_query($sql);
	echo "Data telah di edit";
}
$id = (int) $_GET['idpasien'];
$sql = "select * from databaru where id='$id'";
$result = mysql_query($sql);
$tampil = mysql_fetch_array($result);
?>
<html>
<head>
	<title>Klinik | Edit Data Pasien <?php echo $tampil['nama']; ?></title>
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
		<a href="frontoffice.php"><img src='../img/home.png' height='50' style='margin-left:55px;'></a>
	</div>
	<div id='kanan'>
		<font class='k' style='color:white;margin-top:20px;margin-left:20px;display:inline-block;'>Edit data pasien</font><br>
		<font class='sk' style='color:white;margin-top:20px;margin-left:20px;display:inline-block;'>Edit data pasien atas nama <span class='yellow'><?php echo $tampil['nama']; ?></span></font><br><br>

		<form action='' method='post'>
		<label for='nama'><font class='sk' style='color:white;margin-left:20px;display:inline-block;'>Nama Pasien *</font></label>
		<br><input name='nama' type='text' id='lainlain' value='<?php echo $tampil['nama']; ?>'><br>
		<label for='umur'><font class='sk' style='color:white;margin-left:20px;display:inline-block;'>Umur Pasien *</font></label>
		<br><input name='umur' type='text' id='lainlain' value='<?php echo $tampil['umur']; ?>'><br>
		<label for='gejala'><font class='sk' style='color:white;margin-left:20px;display:inline-block;'>Gejala Yang Dirasakan</font></label>
		<br><input name='gejala' type='text' id='lainlain' value='<?php echo $tampil['gejala']; ?>'><br>
		<label for='penyakitsebelum'><font class='sk' style='color:white;margin-left:20px;display:inline-block;'>Penyakit Yang Pernah Diderita *</font></label>
		<br><input name='penyakitsebelum' type='text' id='lainlain' value='<?php echo $tampil['penyakitsebelum']; ?>'><br>
		<br>
		<input type='submit' name='id' id='submit2' value='<?php echo $tampil['id']; ?>'>
		</form>
	</div>
</body>
</html>