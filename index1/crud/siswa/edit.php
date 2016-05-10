<?php require_once"../conn.php";
$npsn=$amorpdo->prepare("select*from profil ORDER BY npsn");
$npsn->execute();
$npsn=$npsn->fetch();
?>
<?php
$kdedit=$_POST['kdedit'];
$edit=$amorpdo->prepare("select*from siswa where nis='$kdedit' ");
$edit->execute();
$edit=$edit->fetch();
?>

<link rel="stylesheet" href="bootstrap/css/dewe.css">
<div class="container-fluid">
     <form class="contact-us form-horizontal" method="post">
   <legend>EDIT SISWA</legend>
   <div class="form-group">
     <input type="text" class="form-control" id="nis" placeholder="NIS" value="<?php echo $edit['nis'] ?>">
   </div>
   <div class="form-group">
     <input type="text" class="form-control" id="nama" placeholder="NAMA" value="<?php echo $edit['nama'] ?>">
   </div>
   <div class="form-group">
     <input type="text" class="form-control" id="tempat" placeholder="Tempat" value="<?php echo $edit['tempat'] ?>">
   </div>
   <div class="form-group">
     <input type="date" class="form-control" id="tanggal" value="<?php echo $edit['tgl'] ?>">
   </div>
   <div class="form-group">
     <select id="agama" class="form-control">
       <option><?php echo $edit['agama'] ?></option>
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
       <option><?php echo $edit['kelamin'] ?></option>
       <option>laki-laki</option>
       <option>perempuan</option>
     </select>
   </div>
   <div class="form-group">
     <textarea id="alamat" class="form-control" placeholder="Tempat" value=""><?php echo $edit['alamat'] ?></textarea>
   </div>
   <div class="form-group">
     <input type="text" class="form-control" id="npsn" value="<?php echo $edit['npsn'] ?>";>
   </div>
   <div class="form-group"></div>
   <div class="control-group">
     <div class="controls">
     <button type="button" class="btn btn-primary" onclick="siswa_update();">Simpan</button>
     <button type="reset" class="btn">Cancel</button>
       </div>
   </div>
   </form>
  </div> <!-- /container -->

<div id="aksi">.
</div>
