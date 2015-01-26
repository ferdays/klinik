<?php
include('../../koneksi.php');

session_start();

if(!isset($_SESSION['userid'])){
    die("Anda belum login");
}

if($_SESSION['level']!="admin"){
    die("Anda bukan admin");
}

$query = mysql_query ("SELECT * FROM user where level='pasien'");
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
	<title>Klinik | Data Pasien</title>
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
		<div class='menu'>
			<img src="img/statistik.png" height='30' align='left' style='margin-left:20px;margin-top:10px;'>
			<font class='sk' style='margin-left:20px;margin-top:15px;display:inline-block;'>Statistik</font>
		</div>
		</a>
		<a href="pasien.php">
		<div class='menu-active'>
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
		<div id='sub-data'>
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
			<font class='k' style='padding:30px;display:inline-block;color:#49586E;'>Data Pasien</font><br>
			<font class='sk' style='margin-left:30px;display:inline-block;'><a href='#'>Admin</a>&nbsp;&nbsp;/&nbsp;&nbsp;<font class='sk' style='color:#6DC5A3;'>Data Pasien</font></font>
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
			<div id='table'>
				<font class='k' style='color:#49586E;display:inline-block;padding:20px;'>Data Pasien</font><br>
				<table>
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Jenis Kelamin</th>
                                <th>Gejala</th>
                                <th>Penyakit Sebelum</th>
                                <th>Golongan Darah</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            	<?php
    							$query = mysql_query("select * from databaru where type='baru'");
		    					$no = 1;
		    					while ($data = mysql_fetch_array($query)) {
		    					?>
                            <tr>
                                <td bgcolor='#F5F5F5'><?php echo $no; ?></td>
                                <td bgcolor='#F5F5F5'><?php echo $data['nama'] ?></td>
                                <td bgcolor='#F5F5F5'><?php echo $data['umur'] ?></td>
                                <td bgcolor='#F5F5F5'><?php echo $data['jeniskelamin'] ?></td>
                                <td bgcolor='#F5F5F5'><?php echo $data['gejala'] ?></td>
                                <td bgcolor='#F5F5F5'><?php echo $data['penyakitsebelum'] ?></td>
                                <td bgcolor='#F5F5F5'><?php echo $data['golongandarah'] ?></td>
                                <td bgcolor='#F5F5F5'><a href="edit.php?idpasien=<?php echo $data['id'] ?>">Edit</a> | <a href="delete.php?idpasien=<?php echo $data['id'] ?>">Delete</a></td>
                            </tr>
                            </tbody>
                            <?php
                            $no++;
                            	}
                             ?>
                         </table>
			</div>
			<br><br>
			<footer>
				<br><font class='sk' style='color:#7A7676;'> Admin Panel &copy; Ferdi Ferdiansyah</font>
			</footer>
		</article>	
	</div>
</body>
</html>