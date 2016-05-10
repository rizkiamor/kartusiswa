<?php
$cari = $_POST['kdedit'];
 ?>
<table class="table">
  <tr><td><center><b>FOTO</b></td><td><center><b>NAMA</b></td>

  </tr>
  <?php require_once"../conn.php";
//$pdo=$amorpdo->prepare("select*from siswa ");
//$pdo=$amorpdo->prepare("select*from siswa where nama LIKE '%us%' ");
$pdo=$amorpdo->prepare("select*from siswa where nama LIKE '%$cari%' ");
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
  <td width="30%"><a href="#" class="list"><?php
  if ($foto==null) {
    echo "kosong";
  }
    else {
    //  echo $foto;
      echo '<center><img class="preview" width="40%" alt="" src="'.$foto.'" />';
    }
  ?></a></td>
  <td><a href="#" class="list-group-item"><?php echo $nama; ?></a></td>
  <td style="width:50px;">
<div class="btn-group">
<button type="button" class="btn btn-success" onclick="lihat(this.value);" value="<?php echo $tampil['nis'] ?>">Lihat</button></a>
<?php } ?>
</table>
