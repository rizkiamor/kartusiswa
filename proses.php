<?php
require_once"./akses/conn.php";
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$op = $_GET['login'];
if($op=="masuk"){
$amorlog=$amorpdo->prepare("select * from user where username=:username and password=:password");
$amorlog->bindParam(':username', $username);
$amorlog->bindParam(':password', $password);
$amorlog->execute();
$amor = $amorlog->rowCount();
if($amor== 1){
$amor=$amorlog->fetch();
$_SESSION['username'] = $amor['username'];
$_SESSION['password'] = $amor['password'];
//amor HTACCESS
$homepage="homepage.html";
//amor HTACCESS END
 if($amor['username']==$username){
header("location:index1");
}else if($amor['kategori']=='null'){
header("location:login.php");
}
}else{
header("location:../");
}
}else if($op=="out"){
unset($_SESSION['username']);
unset($_SESSION['password']);
header("location:login.php");
}
?>
