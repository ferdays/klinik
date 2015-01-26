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
if($_POST){
	$sql = "update user set userid='{$_POST['username']}',password='{$_POST['password']}' where no='{$_POST['id']}'";
	mysql_query($sql);
	echo "Data telah di edit";
}
$id = (int) $_GET['idpasien'];
$sql = "select * from user where no='$id'";
$result = mysql_query($sql);
$tampil = mysql_fetch_array($result);
?>
<html>
<head>
	<title>Klinik | Edit Panel User - Pasien</title>
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
		<div class='menu-active'>
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
		<div id='sub-panel'>
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
			<font class='k' style='padding:30px;display:inline-block;color:#49586E;'>Panel User</font><br>
			<font class='sk' style='margin-left:30px;display:inline-block;'><a href='#'>Admin</a>&nbsp;&nbsp;/&nbsp;&nbsp;<font class='sk' style='color:#6DC5A3;'>Panel User</font></font>
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
			<div id='pasien'>
				<font class='k' style='color:white;display:inline-block;margin-top:10px;margin-left:10px;'>Edit User Pasien</font><br>
				<br>
				<form action='' method='post'>
					<font class='sk' style='color:white;display:inline-block;margin-left:20px;'>Username</font><br>
					<input type='text' name='username' id='lainlain' value='<?php echo $tampil['userid']; ?>'><br>
					<font class='sk' style='color:white;display:inline-block;margin-left:20px;'>Password</font><br>
					<input type='text' name='password' id='lainlain' value='<?php echo $tampil['password']; ?>'><br>
					<input type='submit' id='submit' name='id' value="<?php echo $tampil['no']; ?>"><br>
				</form>
			</div>
			<div id='frontoffice'>
				<font class='k' style='color:white;display:inline-block;margin-top:10px;margin-left:10px;'>User Frontoffice</font><br>
				<center>
					<table class="tabeluser">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
					 <?php
    					$query = mysql_query("select * from user where level='frontoffice'");

    					$no = 1;
    					while ($data = mysql_fetch_array($query)) {
    				?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['userid']; ?></td>
                                <td><?php echo $data['password']; ?></td>
                                <td><a href="editpanelfrontoffice.php?idpasien=<?php echo $data['no'];?>">Edit</a> | <a href="delete.php?idpasien=<?php echo $data['no']; ?>">Delete</a></td>
                            </tr>
                            </tbody>
                        
                        <?php
                        $no++;
                         } ?>
                         </table>
                        </center>
			</div>
			<div id='dokter'>
				<font class='k' style='color:white;display:inline-block;margin-top:10px;margin-left:10px;'>User Dokter</font><br>
				<center>
					<table class="tabeluser">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
					 <?php
    					$query = mysql_query("select * from user where level='dokter'");

    					$no = 1;
    					while ($data = mysql_fetch_array($query)) {
    				?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['userid']; ?></td>
                                <td><?php echo $data['password']; ?></td>
                                <td><a href="editpaneldokter.php?idpasien=<?php echo $data['no'];?>">Edit</a> | <a href="delete.php?idpasien=<?php echo $data['no']; ?>">Delete</a></td>
                            </tr>
                            </tbody>
                        
                        <?php
                        $no++;
                         } ?>
                         </table>
                        </center>
			</div>
			<footer>
				<br><font class='sk' style='color:#7A7676;'> Admin Panel &copy; Ferdi Ferdiansyah</font>
			</footer>
		</article>	
	</div>
</body>
</html>