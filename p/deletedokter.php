<?php
$idProduk = (int) $_GET['iddokter'];
if($idProduk){
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("klinik",$conn);
	mysql_query("delete from datadokter where id='{$idProduk}'");
}

header("Location: lihatdokter.php");
exit;
