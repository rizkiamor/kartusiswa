<?php require_once"../conn.php";
$i=$_POST['i'];
$u=$_POST['u'];
$p=$_POST['p'];
$n=$_POST['n'];
?>
<?php
$sql_simpan=$amorpdo->prepare("UPDATE user SET
            username='$u',
            password='$p',
				    nama='$n'
				    WHERE id_user='$i'");

$sql_simpan->execute();
?>
<div class="panel panel-default">
    <div class="panel-heading"><center><b>UPDATE DATA BERHASIL</b></div>
</div>.
</div>
