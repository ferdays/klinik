<?php
$idProduk = (int) $_GET['idpasien'];
if($idProduk){
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("klinik",$conn);
	mysql_query("delete from user where id='{$idProduk}'");
}

header("Location: dataop.php");
exit;
