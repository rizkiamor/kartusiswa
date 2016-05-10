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
  <div class="panel-heading"><b>Form Profil</b></div>
  <!--<button type="button" class="btn btn-danger pull-right" onclick="user_tam()" >+</button><br><br>-->
  <div class="container">
    <div class="row">
      <div class="col-sm-5">
      <b>PROFIL SEKOLAH</b>
        <?php require_once"../conn.php";
        $npsn=$amorpdo->prepare("select*from profil ORDER BY npsn");
        $npsn->execute();
        $npsn=$npsn->fetch();
        ?>
        <table class="table">
        <td>NPSN</td><td>:</td><td><?php echo $npsn['npsn']; ?></td><tr>
        <td>INSTANSI<td>:</td></td><td><?php echo $npsn['instansi']; ?></td></tr><tr>
        <td>NAMA SEKOLAH<td>:</td></td><td><?php echo $npsn['nama_sekolah']; ?></td></tr><tr>
        <td>NPSN</td><td>:</td><td><?php echo $npsn['alamat']; ?></td></tr><tr>
        <td colspan="3"><button type="button" class="btn btn-success" onclick="editprofil();">Edit</button></td>
        </table>
      </div>
      <div class="col-sm-4">
        <b>SISWA</b>
      </div>
      <div class="col-sm-2">
      <b>USER</b>
      <table class="table">
      <td>ID USER</td><td>USER</td></tr>
      <?php
      $pdo=$amorpdo->prepare("select*from user");
      $pdo->execute();
      while($tampil=$pdo->fetch()){
        $id=$tampil['id_user'];
        $user=$tampil['username'];
        $password=$tampil['password'];
        $nama=$tampil['nama'];
      ?>

      <td><?php echo $id; ?></td>
      <td><?php echo $user; ?></td></tr>
        <?php } ?>
      </table>
      </div>
    </div>
  </div>
</div>
<div id="aksi">.
</div>
