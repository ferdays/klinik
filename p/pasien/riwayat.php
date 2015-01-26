<?php
include('../../koneksi.php');

session_start();

if(!isset($_SESSION['userid'])){
    die("Anda belum login");
}

if($_SESSION['level']!="pasien"){
    die("Anda bukan admin");
}
$username = $_SESSION['userid'];
?>
<html>
<head>
	<title>Klinik | Riwayat Penyakitmu</title>
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
			<a href="riwayat.php"><div class='menu-active'><font class='sk' style='display:inline-block;margin-top:8px;'>Riwayat</font></div></a>
			<a href="profil.php?profil=<?php echo $data['id']; ?>"><div class='menu'><font class='sk' style='display:inline-block;margin-top:8px;'>Profil</font></div></a>
			<a href='index.php'><div class='menu'><font class='sk' style='display:inline-block;margin-top:8px;'>Home</font></div></a>
		</div>
		<article>
			<div id='page2' style='margin-top:-20px;height:auto;'>
				<br><br>
				<b><font class='k' style='color:#373C40;text-transform:capitalize;'>Riwayat Penyakit Atas Nama <?php echo $_SESSION['userid']; ?></font></b>
				<br>
				<div class='gariskecil'></div>
				<br>
				<font><i>Berikut adalah riwayat penyakit yang pernah kamu derita, <?php echo $_SESSION['userid']; ?></i></font><br><br>
				<?php
				$query1="select * from databaru where username='$username'";
				$result=mysql_query($query1) or die(mysql_error());
				$no = 1;
				while($rows=mysql_fetch_object($result)){
      ?>
				<font class='sk'><i><?php echo $no; ?>. Kamu pernah menderita penyakit <u><?php echo $rows -> gejala; ?></u> pada umur <u><?php echo $rows -> umur; ?></u> tahun</i></font><br><br>
				<?php
				$no++;
			}
			?>
			</div>
			<div id='page4'>
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