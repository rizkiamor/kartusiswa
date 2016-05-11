<?php require_once"../conn.php";
$np=$_POST['np'];
$in=$_POST['ai'];
$na=$_POST['na'];
$al=$_POST['al'];
?>
<?php
$sql_simpan=$amorpdo->prepare("UPDATE profil SET
            instansi='$in',
            nama_sekolah='$na',
				    alamat='$al'
				    WHERE npsn='$np'");



$sql_simpan->execute();
require_once"./profil.php";
?>
