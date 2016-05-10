<?php
$nis = $_POST['nis'];
$nama =$_POST['nama'];
$tempat =$_POST['tempat'];
$tgl =$_POST['tgl'];
$agama =$_POST['agama'];
$kelamin =$_POST['kelamin'];
$alamat =$_POST['alamat'];
$foto = "";
$npsn =$_POST['npsn'];

require_once"../conn.php";
$tsimpan=$amorpdo->prepare("insert into  siswa(nis,nama,tempat,tgl,agama,kelamin,alamat,foto,npsn)
values ('$nis','$nama','$tempat','$tgl','$agama','$kelamin','$alamat','$foto','$npsn')");
$tsimpan->execute();
include_once"tampil.php";

 ?>
