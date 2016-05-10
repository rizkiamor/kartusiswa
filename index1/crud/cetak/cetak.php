<style>
/*table{
 height:400px;
}
tbody{
  overflow-y: scroll;
  height: 300px;
  width: 100%;
  position: absolute;
}*/
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <ol class="breadcrumb">
      <li>
        <button type="button" class="btn btn-danger pull-right" onclick="siswa_tam()">+</button>
        <div class="col-lg-5 pull-right">
         <div class="input-group">
           <span class="input-group-addon">
             <i class="fa fa-search"></i>
           </span>
           <input type="text" class="form-control" onkeyup="cetak_cari(this.value);">
         </div><!-- /input-group -->
       </div><!-- /.col-lg-6 -->
</li>
    </ol>
  </section>
</div>
<div class="panel panel-default">
  <div class="panel-heading"><b>Form Siswa</b></div>
<div class="container">
  <div class="row">
    <div class="col-sm-5">
      <div id="cari">
      <table class="table">
        <tr><td><center><b>FOTO</b></td><td><center><b>NAMA</b></td>

        </tr>
        <?php require_once"../conn.php";
      //$pdo=$amorpdo->prepare("select*from siswa ");
      //$pdo=$amorpdo->prepare("select*from siswa where nama LIKE '%us%' ");
      $pdo=$amorpdo->prepare("select*from siswa ");
      $pdo->execute();
      while($tampil=$pdo->fetch()){
      //nis,nama,tempat,tgl,agama,kelamin,alamat,foto,npsn
      $nis=$tampil['nis'];
      $nama=$tampil['nama'];
      $tempat=$tampil['tempat'];
      $tgl=$tampil['tgl'];
      $agama=$tampil['agama'];
      $kelamin=$tampil['kelamin'];
      $alamat=$tampil['alamat'];
      $foto=$tampil['foto'];
      $npsn=$tampil['npsn'];
      ?>
        <tr>
        <td width="30%;"><a href="#" class="list"><?php
        if ($foto==null) {
          echo "kosong";
        }
          else {
            //echo $foto;
            echo '<center><img class="preview" width="40%" alt="" src="'.$foto.'" />';
          }
        ?></a></td>
        <td><a href="#" class="list-group-item"><?php echo $nama; ?></a></td>
        <td style="width:50px;">
      <div class="btn-group">
      <button type="button" class="btn btn-success" onclick="lihat(this.value);" value="<?php echo $nis; ?>">Lihat</button></a>
      <?php } ?>
      </table>
    </div></div>

    <div class="col-sm-6">
      <div id="lihat">
      </div>

    </div>
  </div>
</div>.
<div id="aksi">
.</div>
