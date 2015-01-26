<?php
include('../koneksi.php');
include('koneksiatm.php');

$username=$_POST['username'];
$password=$_POST['password'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jeniskelamin = $_POST['jeniskelamin'];
$gejala = $_POST['gejala'];
$penyakitsebelum = $_POST['penyakitsebelum'];
$golongandarah = $_POST['golongandarah'];
$uang = $_POST['uang'];
$no = $_POST['noatm'];
$biaya = $_POST['biaya'];

if($uang > $biaya) {
		$hasil = $uang - $biaya;
		mysql_connect('atm');
		$updateuang = mysql_query("update totaluang set uang='$hasil' where no ='$no'");
		if ($updateuang) {
		mysql_select_db('klinik');
		$insertuser=mysql_query("insert into user Values('','$username','$password','pasien')") or die (mysql_error());
		if($insertuser) {
		$insert=mysql_query("insert into databaru Values('','$nama','$umur','$jeniskelamin','$gejala','$penyakitsebelum','$golongandarah')") or die (mysql_error());
			if ($insert){
       		 header('location:daftarpasien.php#sukses');
        		}
        		}
        	}
        	}
else if ($uang < $biaya) {
	header('location:daftarpasien.php#gagal');
}
    ?>