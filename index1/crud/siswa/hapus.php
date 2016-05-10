<?php
require_once"../conn.php";
$kd=$_POST['kdhapus'];
$hapus=$amorpdo->prepare("DELETE FROM siswa WHERE nis='$kd'");
$hapus->execute();
include_once"tampil.php";
?>
