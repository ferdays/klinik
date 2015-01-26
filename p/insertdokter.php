<?php
include('../koneksi.php');


$username=$_POST['username'];
$password=$_POST['password'];
$nama = $_POST['nama'];

$insertuser=mysql_query("insert into user Values('','$username','$password','dokter')") or die (mysql_error());
$insert=mysql_query("insert into datadokter Values('','$username','$password','$nama','dokter')") or die (mysql_error());
	if ($insert){
        header('location:suksesbaru.php');
        }
    ?>
