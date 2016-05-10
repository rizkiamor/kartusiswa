<?php
require_once"../conn.php"; require_once"../autocode.php";
$number=$amorpdo->prepare("select*from user ORDER BY id_user DESC LIMIT 1");
$number->execute();
$nume=$number->fetch();
$autono=$nume['id_user'];
if ($autono==null) {
     $data=autonumber('ADMIN00', 5, 2);
   }else {
     $data=autonumber($autono, 5, 2);
   }
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Menu</a></li>
      <li class="active">User Tambah</li>
    </ol>
  </section>
</div>
<div class="panel panel-default">
  <div class="panel-heading"><b>Form User Tambah</b></div>
  <button type="button" class="btn btn-danger pull-right" onclick="user()" >x</button>
  <table class="table">
    <tr><td><center><b>ID USER</b></td><td><center><b>USERNAME</b></td><td><center><b>PASSWORD</b></td><td><center><b>NAMA</b></td><td><center><b>AKSI</b></td></center>
    </tr>
    <tr>
    <td><input type="text" class="form-control" id="iduser" value="<?php echo $data; ?>"></td>
    <td><input type="text" class="form-control" id="username_u"></td>
    <td><input type="text" class="form-control" id="password_u"></td>
    <td><input type="text" class="form-control" id="nama"></td>
    <td style="width:150px;"><center>
  <div class="btn-group">
<button type="button" class="btn btn-success" onclick="user_simpan();">Tambah</button>
</div></td>
</tr>

  </table>
</div>
<div id="aksi">.
</div>
