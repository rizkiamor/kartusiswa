
<?php
$nis="006";
$nama="Hole";
$tempat="Tuban";
$tgl="2016-01-01";
$agama="islam";
$kelamin="laki-laki";
$alamat="jenu";
$foto="upload_images//b54198e9f2ca9815cff15e9befca398e.jpg";
$npsn="1000";
 ?><?php
 require_once"../conn.php";
 /*
 $tsimpan=$amorpdo->prepare("insert into  siswa(nis,nama,tempat,tgl,agama,kelamin,alamat,foto,npsn)
 values ('$nis','$nama','$tempat','$tgl','$agama','$kelamin','$alamat','$foto','$npsn')");
 $tsimpan->execute();*/

             $foto_u=$amorpdo->prepare("UPDATE siswa SET

              foto = '$foto'
              WHERE nis='$nis'");
              $foto_u->execute();

?>
