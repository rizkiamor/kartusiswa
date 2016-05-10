<?php require_once"../conn.php";
$npsn=$amorpdo->prepare("select*from profil ORDER BY npsn");
$npsn->execute();
$npsn=$npsn->fetch();
?>
<link rel="stylesheet" href="bootstrap/css/dewe.css">
<div class="container-fluid">
     <form class="contact-us form-horizontal" method="post">
   <legend>TAMBAH SISWA</legend>
   <div class="form-group">
     <input type="text" class="form-control" id="nis" placeholder="NIS">
   </div>
   <div class="form-group">
     <input type="text" class="form-control" id="nama" placeholder="NAMA">
   </div>
   <div class="form-group">
     <input type="text" class="form-control" id="tempat" placeholder="Tempat">
   </div>
   <div class="form-group">
     <input type="date" class="form-control" id="tanggal">
   </div>
   <div class="form-group">
     <select id="agama" class="form-control">
       <option>islam</option>
       <option>hindu</option>
       <option>budha</option>
       <option>kristen</option>
       <option>katholik</option>
       <option>konghucu</option>
     </select>
   </div>
   <div class="form-group">
     <select id="kelamin" class="form-control">
       <option>laki-laki</option>
       <option>perempuan</option>
     </select>
   </div>
   <div class="form-group">
     <textarea id="alamat" class="form-control" ></textarea>
   </div>
   <div class="form-group">
     <input type="text" class="form-control" id="npsn" value="<?php echo $npsn['npsn']; ?>";>
   </div>
   <div class="form-group"></div>
   <div class="control-group">
     <div class="controls">
     <button type="button" class="btn btn-primary" onclick="siswa_simp();">Simpan</button>
     <button type="reset" class="btn">Cancel</button>
       </div>
   </div>
   </form>
  </div> <!-- /container -->

<div id="aksi">.
</div>
