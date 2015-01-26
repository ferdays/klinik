<?php
include('../../koneksi.php');

$username = $_POST['username'];
$komentar = $_POST['komentar'];

$insert=mysql_query("insert into komentar Values('','$username','$komentar')") or die (mysql_error());
	if ($insert){
        header('location:komentar.php#sukses');
        }
    ?>
