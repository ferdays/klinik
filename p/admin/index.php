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
	<title>Klinik | Dashboard Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="slider.js"></script>
</head>
<body>
	<div id='wrapper'>
		<div id='menukiri'>
		<center><img src="img/logo.png" height='60'></center><br>
		<a href="index.php"><div class='menu-active'>
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
		<div id='sub'>
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
			<font class='k' style='padding:30px;display:inline-block;color:#49586E;'>Dashboard</font><br>
			<font class='sk' style='margin-left:30px;display:inline-block;'><a href='#'>Admin</a>&nbsp;&nbsp;/&nbsp;&nbsp;<font class='sk' style='color:#6DC5A3;'>Dashboard</font></font>
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
			<br>
			<div id='tampil' style='float:left;background:#6A8ABE;'>
				<img src='img/pasien.png'><br>
				<font class='sb'><?php echo $pasien; ?></font><br>
				<font class='s'> Pasien </font>
			</div>
			<div id='tampil' style='margin-left:310px;background:#FC8675;'>
				<img src='img/dokter.png'><br>
				<font class='sb'><?php echo $dokter; ?></font><br>
				<font class='s'> Dokter </font>
			</div>
			<div id='tampil' style='float:left;background:#5AB6DF;'>
				<img src='img/operator.png'><br>
				<font class='sb'><?php echo $operator; ?></font><br>
				<font class='s'> Operator </font>
			</div>
			<div id='tampil' style='margin-left:310px;background:#4ACACB;'>
				<img src='img/admin.png'><br>
				<font class='sb'><?php echo $admin; ?></font><br>
				<font class='s'> Admin </font>
			</div>
			<div id='semuauser'>
				<font class='b' style='color:white;'> &nbsp; Semua User</font>
				<hr>
				<center>
					<table class="tabeluser">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Level</th>
                            </tr>
                            </thead>
                            <tbody>
					 <?php
    					$query = mysql_query("select * from user");

    					$no = 1;
    					while ($data = mysql_fetch_array($query)) {
    				?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['userid']; ?></td>
                                <td><?php echo $data['password']; ?></td>
                                <td><?php echo $data['level']; ?></td>
                            </tr>
                            </tbody>
                        
                        <?php
                        $no++;
                         } ?>
                         </table>
                        </center>
			</div>
			<br><br><br>
			<div id='grafik'>
				<font class='k' style='display:inline-block;padding:30px;color:#49586E;'>Grafik Jumlah Pasien Pertahun</font>
				<img src="img/grafik.png" width='100%'>
			</div>
			<br><br><br>
			<div id='grafikbulan'>
				<font class='k' style='display:inline-block;padding:30px;color:#49586E;'>Grafik Jumlah Pasien Perbulan</font>
				<img src="img/grafikbulan.png" width='100%'>
			</div>
			<div id='grafikuang'>
				<font class='k' style='display:inline-block;padding:10px;color:#49586E;'>Keuangan Klinik</font>
				<img src="img/grafikuang.png" width='100%'>
			</div>
			<div id='tahun'>
				<font class='k' style='display:inline-block;padding:10px;color:#49586E;'>Tahun</font>
				<br>
				<img src="img/calendar.png"><br>
				<font class='sb' style='display:inline-block;color:#49586E;'>2014</font>
			</div>
			<div id='ferdi'>
				<div class='foto'>
					<img src="img/ferdi.jpg" style='border-radius:50%;margin-top:30px;margin-left:10px;' width='90%'>
				</div>
				<div class='tulisan'>
					<font class='k' style='color:#6585A3;padding:10px;display:inline-block;'>Ferdi Ferdiansyah</font><br>
					<font class='ks' style='padding:10px;color:#ED759E;margin-top:-20px;display:inline-block;'>Newbie Web Designer</font>
					<font class='sk' style='color:#C5BCC2;padding:10px;display:inline-block;'>Bikin web bukan hanya sekedar Tugas, tapi ini Hobi</font>
				</div>
				<div class='tulisan'>
					<font class='k' style='color:#6585A3;padding:10px;display:inline-block;'>Ferdi Ferdiansyah</font><br>
					<font class='ks' style='padding:10px;color:#ED759E;margin-top:-20px;display:inline-block;'>Newbie Web Designer</font>
					<font class='sk' style='color:#C5BCC2;padding:10px;display:inline-block;'>Gatau kenapa jadi hobi bikin web :v</font>
				</div>
				<div class='tulisan'>
					<font class='k' style='color:#6585A3;padding:10px;display:inline-block;'>Ferdi Ferdiansyah</font><br>
					<font class='ks' style='padding:10px;color:#ED759E;margin-top:-20px;display:inline-block;'>Newbie Web Designer</font>
					<font class='sk' style='color:#C5BCC2;padding:10px;display:inline-block;'>Tanpa ada alasan, bikin web jadi hobi :v</font>
				</div>
				<div class='bawah'>
					<center>
					<a href="http://facebook.com/ferdiindonesia554"><img src="img/fb.png" height='50%' style='padding:20px;'></a> 
					<a href="http://twitter.com/ferdifansyah1"><img src="img/twitter.png" height='50%' style='padding:20px;margin-left:50px;'></a> 
					<a href="#"><img src="img/googleplus.png" height='50%' style='padding:20px;margin-left:50px;'></a> 
					</center>
				</div>
			</div>
			<div id='cuaca'>
				<img src="img/hujan.png" style='margin-top:20px;'><br>
				<font class='k' style='color:white;'>21<sup style='font-size:20px;'>O</sup></font><br>
				<font class='k' style='color:white;'>Padalarang</font>
			</div>
			<div id='jam'>
				<br>
				<script type="text/javascript">
				var d = new Date();
				var curr_hour = d.getHours();
				var curr_min = d.getMinutes();
				curr_min = curr_min + "";
				if (curr_min.length == 1) {
    			curr_min = "0" + curr_min;
				}
				document.write('<font class="sb">' + curr_hour + ":" + curr_min + '</font>');
				</script>
				<br>
				<script type='text/javascript'>
				var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
				var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
				var date = new Date();
				var day = date.getDate();
				var month = date.getMonth();
				var thisDay = date.getDay(),
	    		thisDay = myDays[thisDay];
				var yy = date.getYear();
				var year = (yy < 1000) ? yy + 1900 : yy;
				document.write('&nbsp;&nbsp;<font class="k">' + thisDay + ', <br> ' + day + ' ' + months[month] + ' ' + '</font>');
				</script>
			</div>
			<div id='klinik'>
				<font class='k' style='color:white;'> 23 Mei 2004 </font><br>
				<font class='sk' style='padding:30px;display:inline-block;color:white;'> <i>Klinik ini berdiri pada tanggal 23 Mei 2004, yang berarti klinik ini sudah berumur 10 Tahun</i> </font>
			</div>
		</article>
		<br>
			<footer>
				<br><font class='sk' style='margin-left:250px;color:#7A7676;'> Admin Panel &copy; Ferdi Ferdiansyah</font>

			</footer>
		
	</div>
	<script type="text/javascript">
$("#ferdi > .tulisan:gt(0)").hide();

setInterval(function() { 
  $('#ferdi > .tulisan:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#ferdi');
},  3000);
</script>
</body>
</html>