<?php
$host = "localhost";
$user = "root";
$password = "";
$database_name = "kartu_siswa";
$amorpdo=new PDO("mysql:host=$host;dbname=$database_name",$user,$password,array(
  PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
?>
