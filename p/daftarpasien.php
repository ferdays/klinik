<?php
include('koneksiatm.php')
?>

<?php
session_start();


if(!isset($_SESSION['no'])){
    header("location:../index.php");
}


if($_SESSION['level']!="nasabah"){
    die("Anda Belum Login");
}

$tampil = mysql_query("SELECT nama from noatm where no='$_SESSION[no]'");
list($nampil) = mysql_fetch_array($tampil);

$uang = mysql_query("SELECT uang from totaluang where no='$_SESSION[no]'");
list($tampiluang) = mysql_fetch_array($uang);
$noatm = mysql_query("SELECT no from noatm where no='$_SESSION[no]'");
list($nomor) = mysql_fetch_array($noatm);
?>
<html>
<head>
	<title>Klinik | Daftar Akun</title>
	<link rel="stylesheet" type="text/css" href="../styledaftar.css">
</head>
<body>
	<div id='wrapper'>
		<center><img src='../img/logodaftar.png'><br>
		<div id='sukses'>
			<br>
			<center><font class='k'> Pendaftaran Sukses, Sekarang Anda Bisa Login <a href='../index.php#ft-open'> Disini </a> </font> </center>
		</div>
		<div id='gagal'>
			<br>
			<center><font class='k' style='color:white;'> Pendaftaran Gagal - Saldo Tidak Mencukupi </font> </center>
		</div>
		</center>
		<font class='k' style='float:right;display:inline-block;margin-top:-20px;text-transform:capitalize;'>Selamat Datang <b><?php echo $nampil; ?></b> | <a href='../login.php?op=out' style='color:red;'>Logout</a></font>
		<br>
		<hr>
		<font class='k'> Daftar Klinik Ferdi</font>
		<br><br><br><br>
			<div id='info'>
				<font class='k' style='color:white;margin-left:10px;'>Informasi</font>
				<hr style='border:1px solid white;'><br>
				<font class='sk' style='color:white;'> Dengan mendaftar akun ke Klinik Ferdi secara online, anda dikenakan biaya Rp. 10.000,- . Sama halnya seperti anda daftar langsung ditempat</font>
			</div>
		<form action='insertpasien.php' method='post'>
			<font class='k'> No ATM Anda &nbsp;&nbsp;&nbsp;&nbsp; </font> <input required type='text' name='noatm' value='<?php echo $nomor; ?>' id='lainlain' readonly></input><br>
		<font class='k'> Saldo ATM Anda </font> <input required type='text' name='uang' value='<?php echo $tampiluang; ?>' id='lainlain' readonly></input><br>
		<font class='k'> Biaya Daftar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font> <input required type='text' name='biaya' value='10000' id='lainlain' readonly></input><br>
		<font class='k'> Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font>
		<input required type='text' name='username' id='username'><br>
		<font class='k'> Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font>
		<input required type='password' name='password' id='password'><br>
		<font class='k'> Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
		<input required type='text' name='nama' id='lainlain'><br>
		<font class='k'>Umur &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>	
		<input required name='umur' type='text' id='lainlain'  ><br>
		<font class='k'>Jenis Kelamin&nbsp;&nbsp;&nbsp;</font>
		<input required name='jeniskelamin' type='radio' class='radio' value='Laki Laki' style='margin-left:20px;background:white;'  >Laki Laki
		<input required name='jeniskelamin' type='radio' class='radio' value='Perempuan' style='margin-left:20px;'  >Perempuan<br><br>
		<font class='k'>Gejala&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
		<input required name='gejala' type='text' id='lainlain'><br>
		<font class='k'>Penyakit Sebelum </font>
		<input required name='penyakitsebelum' type='text' id='lainlain'><br>
		<font class='k'>Golongan Darah</font>
		<input required name='golongandarah' type='radio' class='radio' value='A' style='margin-left:20px;background:white;'  >A
		<input required name='golongandarah' type='radio' class='radio' value='B' style='margin-left:20px;'  >B
		<input required name='golongandarah' type='radio' class='radio' value='AB' style='margin-left:20px;'  >AB
		<input required name='golongandarah' type='radio' class='radio' value='O' style='margin-left:20px;'  >O
		
		<br><br>
		<br>
		<input required type='submit' id='submit' value=''>
</form>
	</div>
</body>
</html>