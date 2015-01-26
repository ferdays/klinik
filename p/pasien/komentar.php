<?php
include('../../koneksi.php');

session_start();

if(!isset($_SESSION['userid'])){
    die("Anda belum login");
}

if($_SESSION['level']!="pasien"){
    die("Anda bukan admin");
}
$username=$_SESSION['userid'];
?>
<html>
<head>
	<title>Klinik | Tambah Komentar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="slider.js"></script>
</head>
<body>
	<header>
	</header>
	<div id='wrapper'>
		<div id='atas'>
			<?php
			$query1="select * from databaru where username='$username'";
			$result=mysql_query($query1) or die(mysql_error());
			$data=mysql_fetch_array($result);
      ?>
			<img src="img/logo.png" height='80' align='left'>
			<a href="../../login.php?op=out"><div class='menu'><font class='sk' style='display:inline-block;margin-top:8px;'>Logout</font></div></a>
			<a href="riwayat.php"><div class='menu'><font class='sk' style='display:inline-block;margin-top:8px;'>Riwayat</font></div></a>
			<a href="profil.php?profil=<?php echo $data['id']; ?>"><div class='menu'><font class='sk' style='display:inline-block;margin-top:8px;'>Profil</font></div></a>
			<a href='index.php'><div class='menu-active'><font class='sk' style='display:inline-block;margin-top:8px;'>Home</font></div></a>
		</div>
		<article>
			<center>
			<div id='page1'>
				<font class='sb' style='color:white;font-weight:90;'>Tulis Komentarmu,</font><font class='b' style='text-transform:capitalize;'> <?php echo $_SESSION['userid']; ?></font><br><br>
				<font id='sukses'><i>Terimakasih telah memberikan komentar ya <?php echo $_SESSION['userid']; ?></i></font>
				<form action='insertkomentar.php' method='post'>
					<input name='username' value='<?php echo $_SESSION['userid']; ?>' hidden>
					<input type='text' name='komentar' id='komentar' required><br><br>
					<input type='submit' id='submit' value='Kirim!'>
				</form>
			</div>
			</center>
		</center>
			<div id='page4' style='height:100px;'>
			<br><br>
			<font class='k' style='color:#737C6F;'>Temukan Kita Di</font><br>
			<div class='gariskecil' style='background:white;'></div><br>
			<a href="#"><img src="img/facebook.png"></a>
			<a href="#"><img src="img/twitter.png" style='margin-left:20px;'></a>
			<a href="#"><img src="img/instagram.png" style='margin-left:20px;'></a>
			<a href="#"><img src="img/youtube.png" style='margin-left:20px;'></a>
			<br><br>
			<i><font class='sk'> - Created by Ferdi -</font><i>
			</div>
		</article>
	</div>
</body>
</html>