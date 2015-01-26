<?php
session_start();
mysql_connect("localhost","root","") or die("Nggak bisa koneksi");
mysql_select_db("atm");

$noatm = $_POST['noatm'];
$pin = $_POST['pin'];
$op = $_GET['op'];

if($op=="in"){
    $cek = mysql_query("SELECT * FROM noatm WHERE no='$noatm' and pin='$pin'");
    if(mysql_num_rows($cek)==1){
        $c = mysql_fetch_array($cek);
        $_SESSION['noatm'] = $c['noatm'];
        $_SESSION['level'] = $c['level'];
        $_SESSION['no'] = $c['no'];
        if($c['level']=="nasabah"){
            header("location:daftarpasien.php");
        }
    }else{
        echo 'No ATM / PIN Salah';
    }
}else if($op=="out"){
    unset($_SESSION['noatm']);
    unset($_SESSION['level']);
    header("location:index.php");
}
?>
