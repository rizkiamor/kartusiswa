<?php require_once"../conn.php";
$nis = $_POST['nis'];
$nama =$_POST['nama'];
$tempat =$_POST['tempat'];
$tgl =$_POST['tgl'];
$agama =$_POST['agama'];
$kelamin =$_POST['kelamin'];
$alamat =$_POST['alamat'];
$foto = "kosong";
$npsn =$_POST['npsn'];
?>
<?php
$update=$amorpdo->prepare("UPDATE siswa SET
nama = '$nama',
tempat = '$tempat',
tgl = '$tgl',
agama = '$agama',
kelamin = '$kelamin',
alamat = '$alamat',
npsn = '$npsn'
WHERE nis='$nis'");
$update->execute();
include_once"tampil.php";
?>
