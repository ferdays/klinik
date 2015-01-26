<?php
include('../../koneksi.php');

session_start();

if(!isset($_SESSION['userid'])){
    die("Anda belum login");
}

if($_SESSION['level']!="pasien"){
    die("Anda bukan admin");
}
$query = mysql_query ("SELECT * FROM databaru");
$pasien= mysql_num_rows ($query);
$query2 = mysql_query ("SELECT * FROM datadokter");
$dokter= mysql_num_rows ($query2);
$query3 = mysql_query ("SELECT * FROM user where level='admin'");
$operator= mysql_num_rows ($query3);
$username=$_SESSION['userid'];
?>
<html>
<head>
	<title>Klinik | Pasien</title>
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
			<div id='page1'>
			<center>
				<br><br><br><font class='k'>Welcome To Klinik Ferdi </font><br>
				<font class='sb' style='color:white;font-weight:90;'>Hello,</font><font class='b' style='text-transform:capitalize;'> <?php echo $_SESSION['userid']; ?></font><br><br>
				<font class='k'> Coba Fitur Web Kami </font><br><br>
				<div id='slide'>
				<div class='fitur'><font class='k' style='color:white;'>Lihat </font><font class='b' style='color:white;'>Riwayat</font><font class='k' style='color:white;'> Penyakitmu</font><br><br>
				<a href='riwayat.php'><div class='coba'>
					<font class='k' style='color:white;display:inline-block;margin-top:15px;'>Coba</font>
				</div></a>
				</div>
				<div class='fitur'><font class='k' style='color:white;'>Lihat Berbagai </font><font class='b' style='color:white;'>Komentar</font><font class='k' style='color:white;'> Para Pasien Tentang Web Ini</font><br><br>
				<a href='profil.php?profil=<?php echo $data['id']; ?>'><div class='coba'>
					<font class='k' style='color:white;display:inline-block;margin-top:15px;'>Coba</font>
				</div></a>
			</div>
				<div class='fitur'><font class='k' style='color:white;'>Tuliskan </font><font class='b' style='color:white;'>Komentarmu</font><font class='k' style='color:white;'> Tentang Web Ini</font><br><br>
				<a href='komentar.php'><div class='coba'>
					<font class='k' style='color:white;display:inline-block;margin-top:15px;'>Coba</font>
				</div>
			</a>
				</div>
			</div>
		</div>
		</center>
			<div id='page2'>
				<br><br>
				<b><font class='k' style='color:#373C40;'>Tentang Klinik Ferdi</font></b>
				<br>
				<div class='gariskecil'></div>
				<br>
				<font><i>We see the world in many different ways just like consumers, which helps us understand them!</i></font><br><br>
				<img src="img/logo.png">
			</div>
			<div id='page3'>
			<br><br>
				<b><font class='k' style='color:#373C40;'>Statistik Klinik Ferdi</font></b>
				<br>
				<div class='gariskecil'></div><br>
				<div id='wadah'>
				<div id='statistik-pasien'>
				</div><br>
				<font class='s' style='color:#373C40;'>Pasien</font><br><br>
				<font>Jumlah pasien di klinik ini ada <font class='s'><?php echo $pasien; ?></font><br> Orang</font>
				</div>
				<div id='wadah2'>
				<div id='statistik-dokter'>
				</div><br>
				<font class='s' style='color:#373C40;'>Dokter</font><br><br>
				<font>Jumlah dokter di klinik ini ada <font class='s'><?php echo $dokter; ?></font><br> Orang</font>
				</div>
				<div id='wadah2'>
				<div id='statistik-admin'>
				</div><br>
				<font class='s' style='color:#373C40;'>Admin</font><br><br>
				<font>Jumlah admin di klinik ini ada <font class='s'><?php echo $operator; ?></font><br> Orang</font>
				</div>
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
	<script type="text/javascript">
$("#slide > .fitur:gt(0)").hide();

setInterval(function() { 
  $('#slide > .fitur:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slide');
},  5000);
</script>
</body>
</html>