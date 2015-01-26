<?php
session_start();
mysql_connect("localhost","root","") or die("Nggak bisa koneksi");
mysql_select_db("klinik");

$userid = $_POST['userid'];
$password = $_POST['password'];
$op = $_GET['op'];

if($op=="in"){
    $cek = mysql_query("SELECT * FROM user WHERE userid='$userid' and password='$password'");
    if(mysql_num_rows($cek)==1){
        $c = mysql_fetch_array($cek);
        $_SESSION['userid'] = $c['userid'];
        $_SESSION['level'] = $c['level'];
        if($c['level']=="pasien"){
            header("location:p/pasien");
        }else if($c['level']=="frontoffice"){
            header("location:p/frontoffice.php");
        }
        else if($c['level']=="admin"){
            header("location:p/admin");
        }
    }else{
        header("location:index.php#salah");
    }
}else if($op=="out"){
    unset($_SESSION['usernme']);
    unset($_SESSION['level']);
    header("location:index.php");
}
?>
