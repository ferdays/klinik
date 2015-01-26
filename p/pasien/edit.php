<?php
include('../../koneksi.php');
$id = (int) $_GET['profil'];
session_start();

if(!isset($_SESSION['userid'])){
    die("Anda belum login");
}

if($_SESSION['level']!="pasien"){
    die("Anda bukan admin");
}
$username=$_SESSION['userid'];
if($_POST){
	$sql = "update databaru set nama='{$_POST['nama']}',umur='{$_POST['umur']}' where id='{$_POST['id']}'";
	mysql_query($sql);
	echo "Data telah di edit";
}
$sql = "select * from databaru where id='$id'";
$result = mysql_query($sql);
$tampil = mysql_fetch_array($result);
$password = "select * from user where userid='$username'";
$result2 = mysql_query($password);
$tampil2 = mysql_fetch_array($result2);
?>
<html>
<head>
	<title>Klinik | <?php echo $_SESSION['userid']; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="slider.js"></script>
</head>
<style type="text/css">
input {
	width: 200px;
	height: 30px;
	background-color: transparent;
	border-radius: 5px;
	border: 1px solid white;
	color: white;
	padding: 10px;
	margin-top: 20px;
}
</style>
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
			<a href="profil.php?profil=<?php echo $data['id']; ?>"><div class='menu-active'><font class='sk' style='display:inline-block;margin-top:8px;'>Profil</font></div></a>
			<a href='index.php'><div class='menu'><font class='sk' style='display:inline-block;margin-top:8px;'>Home</font></div></a>
		</div>
		<article>
			<center>
			<div id='page1'>
				<form action='' method='post'>
			<font class='sk' style='text-transform:capitalize;'>Nama :	<input type='text' name='nama' value='<?php echo $tampil['nama']; ?>'> </font><br>
			<font class='sk' style='text-transform:capitalize;'>Umur :	<input type='text' name='umur' value='<?php echo $tampil['umur']; ?>'> </font><br>
			<font class='sk' style='text-transform:capitalize;'>Username :	</font><font>*Silahkan hubungi admin untuk mengubah username </font></font><br>
			<font class='sk' style='text-transform:capitalize;'>Password :	</font><font>*Silahkan hubungi admin untuk mengubah password </font><br><bR>
			<input name='id' value='<?php echo $tampil['id']; ?>' hidden>
			<input type='submit' style='height:50px;margin-top:1px;'>
			</form>
		</a>
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