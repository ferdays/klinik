<?php
session_start();

if(!isset($_SESSION['userid'])){
    die("Anda belum login");
}

if($_SESSION['level']!="frontoffice"){
    die("Anda bukan admin");
}
?>
<html>
<head>
	<title>Klinik | Front Office</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body id='menu'>
	<div id='ft-wrapper-menu'>
		<br>
		<font class='b' style='font-weight:100;float:left;'>Start</font>
		<a href='#dropdown'>
			<div id='user'>
			<img src='../img/profil.png' height='100px' align='right'>
			<font class='s' style='margin-top:15px;display:inline-block;text-transform:capitalize;'><?php echo $_SESSION['userid'];?> </font>
			<a href='../login.php?op=out'>
			<div id='dropdown'>
			<font class='s'> Logout </font>
			</div>
			</a>
		</div>
		</a>
		<article>
		<div id='wadahmenu1'>
		<!-- Menu 1 -->
		<div class="wadahmuter" ontouchstart="this.classList.toggle('hover');">
 	 	<div class="flipper">
   	 	<div class="menu1">
   	 	</div>
   		<div class="menu1b">
     	<p>Klinik kami berusaha membuat pasien nyaman dengan fasilitas yang kami buat, dimulai dari harga perawatan yang murah sampai dengan kualitas dokter internasional</p>
    	</div>
  		</div>
		</div>
		<!-- Akhir Menu 1 -->

		<!-- Menu 2 -->
		<a href='pasienbaru.php'>
		<div class="wadahmuter2" ontouchstart="this.classList.toggle('hover');">
 	 	<div class="flipper">
   	 	<div class="menu2">
   	 	<font class='sk' style='margin-top:125px;display:inline-block;'>&nbsp;Pasien Baru</font>
   	 	</div>
   		<div class="menu2b">
     	<p>Tambahkan Data Pasien Baru Disini <br><br> - Klinik Ferdi -</p>
    	</div>
  		</div>
		</div>
		</a>
		<!-- Akhir Menu 2 -->

		<!-- Menu 3 -->
		<a href='dokter.php'>
		<div class="wadahmuter3" ontouchstart="this.classList.toggle('hover');">
 	 	<div class="flipper">
   	 	<div class="menu3">
   	 	<font class='sk' style='margin-top:125px;display:inline-block;'>&nbsp;Dokter</font>
   	 	</div>
   		<div class="menu3b">
     	<p>Tambahkan Data Dokter Disini <br><br> - Klinik Ferdi -</p>
    	</div>
  		</div>
		</div>
		</a>
		<!-- Akhir Menu 3 -->
		</div>

		
		<!-- Menu 4 -->
		<a href='lihatdata.php'>
		<div class="wadahmuter4" ontouchstart="this.classList.toggle('hover');">
 	 	<div class="flipper">
   	 	<div class="menu4">
   	 	<font class='sk' style='margin-top:295px;display:inline-block;'>&nbsp;Lihat Data Pasien</font>
   	 	</div>
   		<div class="menu4b">
     	<p>Lihat Semua Data Pasien Disini <br><br> - Klinik Ferdi -</p>
    	</div>
  		</div>
		</div>
		</a>
		<!-- Akhir Menu 4 -->
		
		<!-- Menu 5 -->
		<div id='wadahmenu3'>
		<a href='editdata.php'>
		<div class="wadahmuter5" ontouchstart="this.classList.toggle('hover');">
 	 	<div class="flipper">
   	 	<div class="menu5">
   	 	<font class='sk' style='margin-top:125px;display:inline-block;'>&nbsp;Edit Data Pasien</font>
   	 	</div>
   		<div class="menu5b">
     	<p>Edit Data Pasien Disini <br><br> - Klinik Ferdi -</p>
    	</div>
  		</div>
		</div>
		</div>
		</a>
		<!-- Akhir Menu 5 -->

		<!-- Menu 6 -->
		<a href="lihatdokter.php">
		<div id='wadahmenu3'>
		<div class="wadahmuter6" ontouchstart="this.classList.toggle('hover');">
 	 	<div class="flipper">
   	 	<div class="menu6">
   	 	<font class='sk' style='margin-top:125px;display:inline-block;'>&nbsp;Lihat Data Dokter</font>
   	 	</div>
   		<div class="menu6b">
     	<p>Lihat semua data dokter Disini <br><br> - Klinik Ferdi -</p>
    	</div>
  		</div>
		</div>
		</div>
	</a>
		<!-- Akhir Menu 6 -->
		</article>
	</div>
</body>
</html>