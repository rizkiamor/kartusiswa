<?php
require_once"../conn.php";
$kd=$_POST['kdhapus'];
$hapus=$amorpdo->prepare("DELETE FROM user WHERE id_user='$kd'");
$hapus->execute();
?>
<div class="panel panel-default">
    <button type="button" class="btn btn-danger pull-right" onclick="user()" >x</button>
    <div class="panel-heading"><center><b>HAPUS DATA BERHASIL</b></div>
</div>.
</div>
