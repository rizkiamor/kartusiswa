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
      <div class="col-sm-3">
        <br>
        <img src="./img/tut.png" width="70%">
      </div>
      <div class="col-sm-3"><br>
      <img src="./img/sd.png" width="100%">
      </div>
    </div>
  </div>
</div>
<div id="aksi">.
</div>
