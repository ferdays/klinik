<?php
include('koneksi.php');
$query = mysql_query ("SELECT * FROM databaru");
$pasien= mysql_num_rows ($query);
$query2 = mysql_query ("SELECT * FROM datadokter");
$dokter= mysql_num_rows ($query2);
$query3 = mysql_query ("SELECT * FROM user where level='frontoffice'");
$operator= mysql_num_rows ($query3);
?>
<html>
<head>
	<title>Klinik | Index</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- Open -->
	<a href='#ft-open'>
	<div id='ft-open'>
		<div class='ft-jam'>
			<script type="text/javascript">
			var d = new Date();
			var curr_hour = d.getHours();
			var curr_min = d.getMinutes();
			curr_min = curr_min + "";
			if (curr_min.length == 1) {
    		curr_min = "0" + curr_min;
			}
			document.write('<font class="jam">' + curr_hour + ":" + curr_min + '</font>');
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
			document.write('&nbsp;&nbsp;<font class="tanggal">' + thisDay + ', ' + day + ' ' + months[month] + ' ' + '</font>');
			</script>
		</div>
	</div>
	</a>
	<!-- Akhir Open -->

	<!-- Wrapper -->
	<div id='ft-wrapper'>
		<br><br>
		<div id='ft-login'>
			<font class='k'>Login</font>
			<br>
			<center><div id='salah'>
				<center><font class='sk' style='margin-top:13px;display:inline-block;'> Username / Password Salah </font></center>
			</div>
			</center>
			<hr>
			<img src='img/user.png' height='200px' align='left'>
			<form method='post' action="login.php?op=in">
				<label for='username'><font class='sk'>&nbsp;&nbsp;&nbsp;Username</font></label>
				<input type='text' name='userid' id='username'></input><br>
				<label for='password'><font class='sk'>&nbsp;&nbsp;&nbsp;Password</font></label><br>
				<input type='password' name='password' id='password'></input>
				<input type='submit' id='submit' name='submit' value=''></input>
			</form>
			<a href='help.php'><font class='ks'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bagaimana caranya saya untuk login ?</font></a><br><br>
			<a href='help.php'><font class='ks' style='margin-left:202px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saya kesulitan login</font></a>
			<br><br><br><br>
			<img src="img/help.png" height='50' style='float:left;'>
			<font class='k' style='margin-left:20px;'> Informasi Klinik </font><hr>
			<center>
			<div id='ket'>
				<font class='b'><?php echo $pasien; ?></font>
				<hr>
				<font class='k'>Pasien <br>Ada Disini</font>
			</div>
			<div id='ket'>
				<font class='b'><?php echo $dokter; ?></font>
				<hr>
				<font class='k'>Dokter <br>Ada Disini</font>
			</div>
			<div id='ket'>
				<font class='b'><?php echo $operator; ?></font>
				<hr>
				<font class='k'>Operator <br>Ada Disini</font>
			</div>
			</center>
		</div>
	</div>
	<!-- Akhir Wrapper-->
</body>
</html>