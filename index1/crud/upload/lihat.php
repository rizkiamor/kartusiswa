<?php
require_once"../conn.php";
$kdedit=$_POST['flihat'];
$image=$amorpdo->prepare("select*from siswa where nis='$kdedit' ");
$image->execute();
$image=$image->fetch();
$nis1=$image['nis'];
$nama1=$image['nama'];
$tempat1=$image['tempat'];
$tgl1=$image['tgl'];
$agama1=$image['agama'];
$kelamin1=$image['kelamin'];
$alamat1=$image['alamat'];
$img=$image['foto'];
$npsn1=$image['npsn'];
?>
<br>
<?php
if ($img==null) {
  require_once("../upload/scr.php");
}
else {
  //echo '<center><img class="preview" width="50%" alt="" src="'.$img.'" />';
  echo '
  <table border="0">
  <td><center><img class="preview" width="70%" alt="" src="'.$img.'" /></td>
  </table><br>
  ';
}
?>
