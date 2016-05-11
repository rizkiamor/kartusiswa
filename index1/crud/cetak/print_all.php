<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KTM | SD TEMAJI</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../bootstrap/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../bootstrap/css/dewe.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
</head>
<table class="table">
<?php require_once"../conn.php";
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
<td>
<center>
<table border="1" background="../../img/skat.png">

<td><table border="0" background="../../img/atas.png"><td width="100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../img/tut.png" width="65%"><td><td width=""><center><h3><b>SD NEGERI TEMAJI I<br>
KARTU TANDA SISWA</b></h3></center></td><td width="10"></td><tr>
<td></td></tr></table></td>
<td rowspan="4" width="359"><img src="../../img/belakang.png" width=""></td></tr>
<tr>
<td><table border="0"><td rowspan="7" width="7" height="140"></td><td rowspan="7"><img src="../../<?php echo $foto; ?>" width="130"></td>
<td width="17"><td><div class="tab">NIS</div></td><td width="10"></td><td width="17"><div class="tab">:</td><td><div class="tab"><?php echo $nis;?></td><tr>
<td width=""><td><div class="tab">NAMA</td><td width=""></td><td><div class="tab">:</td><td><div class="tab"><?php echo $nama;?></td></tr>
<td width=""><td><div class="tab">TEMPAT</td><td width=""></td><td><div class="tab">:</td><td><div class="tab"><?php echo $tempat.",&nbsp;".$tgl;?></td></td></tr>
<td width=""><td><div class="tab">AGAMA</td><td width=""></td><td><div class="tab">:</td><td><div class="tab"><?php echo $agama;?></td></tr>
<td width=""><td><div class="tab">ALAMAT</td><td width=""></td><td><div class="tab">:</td><td><div class="tab"><?php echo $alamat;?></td></tr>
  <td width=""><td><div class="tab">JENIS KELAMIN</td><td width=""></td><td><div class="tab">:</td><td><div class="tab"><?php echo $kelamin;?></td></tr>
</table></td>
<tr><td><center><div class="tab">@SDN TEMAJI 2016</center></td></tr></table></td></table>
</td>
<p>
<?php } ?>
</table>

<script>
 window.load = print_d();
 function print_d(){
 window.print();
 }
 </script>
