<?php
include('../koneksi.php');


$username=$_POST['username'];
$password=$_POST['password'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jeniskelamin = $_POST['jeniskelamin'];
$gejala = $_POST['gejala'];
$penyakitsebelum = $_POST['penyakitsebelum'];
$golongandarah = $_POST['golongandarah'];

$insertuser=mysql_query("insert into user Values('','$username','$password','pasien')") or die (mysql_error());
$insert=mysql_query("insert into databaru Values('','$username','$nama','$umur','$jeniskelamin','$gejala','$penyakitsebelum','$golongandarah','baru')") or die (mysql_error());
	if ($insert){
        header('location:suksesbaru.php');
        }
    ?>
