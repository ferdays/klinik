<?php
include('../../koneksi.php');

session_start();

if(!isset($_SESSION['userid'])){
    die("Anda belum login");
}

if($_SESSION['level']!="admin"){
    die("Anda bukan admin");
}

$query = mysql_query ("SELECT * FROM databaru");
$pasien= mysql_num_rows ($query);
$query2 = mysql_query ("SELECT * FROM user where level='dokter'");
$dokter= mysql_num_rows ($query2);
$query3 = mysql_query ("SELECT * FROM user where level='frontoffice'");
$operator= mysql_num_rows ($query3);
$query4 = mysql_query ("SELECT * FROM user where level='admin'");
$admin= mysql_num_rows ($query4);
?>
<html>
<head>
	<title>Klinik | Statistik</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id='wrapper'>
		<div id='menukiri'>
		<center><img src="img/logo.png" height='60'></center><br>
		<a href="index.php"><div class='menu'>
			<img src="img/house.png" height='30' align='left' style='margin-left:20px;margin-top:10px;'>
			<font class='sk' style='margin-left:20px;margin-top:15px;display:inline-block;'>Dashboard</font>
		</div>
		</a>
		<a href="statistik.php">
		<div class='menu-active'>
			<img src="img/statistik.png" height='30' align='left' style='margin-left:20px;margin-top:10px;'>
			<font class='sk' style='margin-left:20px;margin-top:15px;display:inline-block;'>Statistik</font>
		</div>
		</a>
		<a href="pasien.php">
		<div class='menu'>
			<img src="img/data.png" height='30' align='left' style='margin-left:20px;margin-top:10px;'>
			<font class='sk' style='margin-left:20px;margin-top:15px;display:inline-block;'>Data Pasien</font>
		</div>
		</a>
		<a href="dataop.php">
		<div class='menu'>
			<img src="img/frontoffice.png" height='30' align='left' style='margin-left:20px;margin-top:10px;'>
			<font class='sk' style='margin-left:20px;margin-top:15px;display:inline-block;'>Data Operator</font>
		</div>
		</a>
		<a href="paneluser.php">
		<div class='menu'>
			<img src="img/panel.png" height='30' align='left' style='margin-left:20px;margin-top:10px;'>
			<font class='sk' style='margin-left:20px;margin-top:15px;display:inline-block;'>Panel User</font>
		</div>
		</a>
		<a href="#">
		<div class='menu'>
			<img src="img/setting.png" height='30' align='left' style='margin-left:20px;margin-top:10px;'>
			<font class='sk' style='margin-left:20px;margin-top:15px;display:inline-block;'>Pengaturan</font>
		</div>
		</a>
		<a href="../../login.php?op=out">
		<div class='menu'>
			<img src="img/logout.png" height='30' align='left' style='margin-left:20px;margin-top:10px;'>
			<font class='sk' style='margin-left:20px;margin-top:15px;display:inline-block;'>Logout</font>
		</div>
		</a>
		</div>
		<div id='menuatas'>
		<a href="#">
		<div id='sub-statistik'>
		</div>
		</a>
		<a href='#'>
		<div id='user'>
		<img src="img/profil.png" height='70%' align='left' style='margin-top:10px;margin-left:15px;'>
		<font class='k' style='margin-top:10px;display:inline-block;text-transform:capitalize;'><?php echo $_SESSION['userid'];?></font>
		</div>
		</a>
	</div>
		<article>
			<br><br><br>
			<font class='k' style='padding:30px;display:inline-block;color:#49586E;'>Statistik</font><br>
			<font class='sk' style='margin-left:30px;display:inline-block;'><a href='#'>Admin</a>&nbsp;&nbsp;/&nbsp;&nbsp;<font class='sk' style='color:#6DC5A3;'>Statistik</font></font>
			<div id='info'>
				<font class='sk' style='padding:10px;display:inline-block;color:#49586E;'>Pengeluaran</font>
				<img src="img/pengeluaran.png" align='right' style='margin-right:5px;'>
				<font style='font-size:20px;margin-top:-10px;padding:10px;display:inline-block;color:#FF9381;'>Rp. 1.000.000,-</font>
			</div>
			<div id='info'>
				<font class='sk' style='padding:10px;display:inline-block;color:#49586E;'>Pemasukan</font>
				<img src="img/pemasukan.png" align='right' style='margin-right:5px;'>
				<font style='font-size:20px;margin-top:-10px;padding:10px;display:inline-block;color:#6FE3B8;'>Rp. 90.000,-</font>
			</div>
			<br><br>
			<div id='statistik' style='background:#FC8675;'>
				<img src="img/pasien.png" style='margin-left:5px;margin-top:10px;' align='left'>
				<font class='b'><?php echo $pasien; ?></font><br>
				<font class='sk'> Pasien </font>
			</div>
			<div id='statistik' style='background:#5AB6DF;'>
				<img src="img/dokter.png" style='margin-left:5px;margin-top:10px;' align='left'>
				<font class='b'><?php echo $dokter; ?></font><br>
				<font class='sk'> Dokter </font>
			</div>
			<div id='statistik' style='background:#65CEA7;'>
				<img src="img/frontoffice.png" height='65%' style='margin-left:5px;margin-top:10px;' align='left'>
				<font class='b'><?php echo $operator; ?></font><br>
				<font class='sk'> Frontoffice </font>
			</div>
			<div id='statistik' style='background:#EBC85E;'>
				<img src="img/visitor.png" style='margin-left:5px;margin-top:10px;' align='left'>
				<font class='b'>195</font><br>
				<font class='sk'> Pengunjung </font>
			</div>
			<div id='grafik' style='display:inline-block;width:600px;margin-top:20px;height:350px;'>
				<font class='k' style='display:inline-block;padding:20px;color:#49586E;'>Grafik Jumlah Pasien Pertahun</font>
				<img src="img/grafik.png" width='100%'>
			</div>
			<div id='profil'>
				<div class='sampul'>
					<img src="img/ferdi.jpg" height='100' style='border-radius:10px;margin-left:10px;margin-top:100px;border:3px solid white;'><br>
					<font class='s' style='display:inline-block;margin-top:-50px;margin-left:190px;color:#495882;'>Ferdi F.</font><br>
				<font class='sk' style='color:#C5BCC2;padding:30px;display:inline-block;'>Junior Web Designer | <font class='sk' style='color:#ED759E;'>#SMKN4PDL</font></font></font>
				</div>
			</div>
			<div id='grafikvisitor'>
				<center>
				<font class='sk' style='color:#49586E;display:inline-block;margin-top:10px;'>Jumlah Pasien Bulan Ini</font><br>
					<font class='sb' style='color:#49586E;'><?php echo $pasien; ?></font><br>
					<font class='k' style='color:#49586E;'> Pasien </font>
				</center>
			</div>
			<div id='grafikvisitor'>
				<center>
				<font class='sk' style='color:#49586E;display:inline-block;margin-top:10px;'>Jumlah Pasien Tahun Ini</font><br>
					<font class='sb' style='color:#49586E;'>137</font><br>
					<font class='k' style='color:#49586E;'> Pasien </font>
				</center>
			</div>
			<div id='grafikvisitor'>
				<center>
				<font class='sk' style='color:#49586E;display:inline-block;margin-top:10px;'>Jumlah Semua Pasien</font><br>
					<font class='sb' style='color:#49586E;'>1.419</font><br>
					<font class='k' style='color:#49586E;'> Pasien </font>
				</center>
			</div>
			<div id='grafikbulan' style='margin-top:20px;height:350px;border-radius:10px;'>
				<center><font class='k' style='color:#49586E;display:inline-block;'>Pasien Tahun Ini</font></center>
				<img src="img/grafikbulan.png" width='100%'>
			</div>
			<div id='komentar'>
				<font class='k' style='display:inline-block;padding:10px;color:white;'>Komentar Para Pasien</font>
				<br>
				<?php
				$query1="select * from komentar";
				$result=mysql_query($query1) or die(mysql_error());
				$no = 1;
				while($rows=mysql_fetch_object($result)){
      ?>
				<font class='sk' style='color:white;margin-left:20px;'><i><?php echo $no; ?>. <?php echo $rows -> username; ?> mengatakan, "<?php echo $rows -> komentar; ?>"</i></font><br><br>
				<?php
				$no++;
			}
			?>
			</div>	
			<div id='uang' style='background: #65CEA7;margin-top:40px;'>
				<img src="img/pasien.png" height='80%' style='margin-left:5px;margin-top:10px;' align='left'>
				<font class='sb' style='color:white;display:inline-block;margin-top:10px;'><?php echo $pasien; ?></font><br>
				<font class='s' style='color:white;'> Pasien </font>
			</div>
			<div id='uang' style='background:#FC8675;'>
				<img src="img/dokter.png" height='80%' style='margin-left:5px;margin-top:10px;' align='left'>
				<font class='sb' style='color:white;display:inline-block;margin-top:10px;'><?php echo $dokter; ?></font><br>
				<font class='s' style='color:white;'> Dokter </font>
			</div>
			<div id='uang' style='background:#5AB6DF;'>
				<img src="img/frontoffice.png" height='80%' style='margin-left:5px;margin-top:10px;' align='left'>
				<font class='sb' style='color:white;display:inline-block;margin-top:10px;'><?php echo $operator; ?></font><br>
				<font class='s' style='color:white;'> Frontoffice </font>
			</div>
			<br><br>
			<footer>
				<br><font class='sk' style='color:#7A7676;'> Admin Panel &copy; Ferdi Ferdiansyah</font>
			</footer>
		</article>	
	</div>
</body>
</html>