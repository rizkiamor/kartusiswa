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
<p>
<?php
echo '
<table border="0">
<td><center><img class="preview" width="70%" alt="" src="'.$img.'" /></td>
</table>'?>
<br>
    <form class="uploadform" method="post" enctype="multipart/form-data" action=''>
        <div class="input-group input-group-lg">
          <span class="input-group-addon" id="sizing-addon1">Gambar</span>
          <input type="file" class="form-control" name="gambar" aria-describedby="sizing-addon1" />
          <input type="hidden" name="ni" id="ni" value="<?php echo $nis1; ?>">
          <span class="input-group-addon" id="sizing-addon1">
            <input type="submit" value="Submit" name="btn-upload" id="btn-upload" class="btn btn-success btn-xs"></span>
        </div>

</form>
    <div id='viewimage'><div>.</div></div>
