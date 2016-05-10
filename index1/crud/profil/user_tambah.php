<?php
require_once"../conn.php";
$id = $_POST['i'];
$user = $_POST['u'];
$pass = $_POST['p'];
$nama = $_POST['k'];

//echo $id.'<br>'.$user.'<br>'.$pass.'<br>'.$nama;
$sql_simpan=$amorpdo->prepare("insert into  user(id_user,username,password,nama)
values ('$id','$user','$pass','$nama')");
$sql_simpan->execute();
?>
<div class="panel panel-default">
    <div class="panel-heading"><center><b>INSERT DATA BERHASIL</b></div>
</div>.
</div>
<script language="JavaScript">//alert('Data Berhasil Di Simpan !'); document.location=('')</script>
