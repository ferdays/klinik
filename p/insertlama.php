<?php
include('../koneksi.php');


$username=$_POST['username'];
$umur = $_POST['umur'];
$gejala = $_POST['gejala'];
$insert=mysql_query("insert into databaru Values('','$username','','$umur','','$gejala','','','lama')") or die (mysql_error());
	if ($insert){
        header('location:suksesbaru.php');
        }
    ?>
