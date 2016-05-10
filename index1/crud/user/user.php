<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Menu</a></li>
      <li class="active">User</li>
    </ol>
  </section>
</div>
<div class="panel panel-default">
  <div class="panel-heading"><b>Form User</b></div>
  <button type="button" class="btn btn-danger pull-right" onclick="user_tam()" >+</button>
  <table class="table">
    <tr><td><center><b>ID USER</b></td><td><center><b>USERNAME</b></td><td><center><b>PASSWORD</b></td><td><center><b>NAMA</b></td><td><center><b>AKSI</b></td></center>
    </tr>
    <?php require_once"../conn.php";
$pdo=$amorpdo->prepare("select*from user");
$pdo->execute();
while($tampil=$pdo->fetch()){
  $id=$tampil['id_user'];
  $user=$tampil['username'];
  $password=$tampil['password'];
  $nama=$tampil['nama'];
?>
    <tr>
    <td><a href="#" class="list-group-item"><?php echo $id; ?></a></td>
    <td><a href="#" class="list-group-item"><?php echo $user; ?></a></td>
    <td><a href="#" class="list-group-item"><?php echo $password; ?></a></td>
    <td><a href="#" class="list-group-item"><?php echo $nama; ?></a></td>
    <td style="width:150px;">
  <div class="btn-group">
<button type="button" class="btn btn-success" onclick="user_edit(this.value);" value="<?php echo $tampil['id_user'] ?>">Ubah</button></a>
<button type="button" class="btn btn-danger"  onclick="user_hapus(this.value);" value="<?php echo $tampil['id_user'] ?>">Hapus</button></div></td>
</tr>
  <?php } ?>
  </table>
</div>
<div id="aksi">.
</div>
