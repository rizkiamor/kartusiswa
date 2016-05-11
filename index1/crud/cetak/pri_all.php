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
<table border="1">
<td width="350">
 <!--depan-->
 <table border="0">
 <td width="14"></td><td width="" ><img src="../../img/tut.png" width="60"></td><td width="36"></td>
 <td colspan="2" width=""><center><h4><b>KARTU TANDA SISWA<br>SDN TEMAJI I</b></h4>
 <center><div class="tab">Alamat : Jl Tuban - Semarang km.18</div><center></td>
 </table>
</td>
<td rowspan="3">
  <!--belakang-->
  <table>
  <td width="350"><img src="../../img/belakang.png" width=""></td>
</table>
</td>
<tr>
<td>
  <table border="0"><td rowspan="7" width="7" height="140"></td><td rowspan="7"><img src="../../<?php echo $foto; ?>" width="130"></td>
  <td width="10"><td><div class="tab">NIS</div></td><td width="9"></td><td width="10"><div class="tab">:</td><td><div class="tab"><?php echo $nis;?></td><td width=""></td><tr>
  <td width=""><td><div class="tab">NAMA</td><td width=""></td><td><div class="tab">:</td><td><div class="tab"><?php echo $nama;?></td></tr>
  <td width=""><td><div class="tab">TEMPAT</td><td width=""></td><td><div class="tab">:</td><td><div class="tab"><?php echo $tempat.",&nbsp;".$tgl;?></td></td></tr>
  <td width=""><td><div class="tab">AGAMA</td><td width=""></td><td><div class="tab">:</td><td><div class="tab"><?php echo $agama;?></td></tr>
  <td width=""><td><div class="tab">JENIS KELAMIN</td><td width=""></td><td><div class="tab">:</td><td><div class="tab"><?php echo $kelamin;?></td></tr>
  <td width=""><td><div class="tab">ALAMAT</td><td width=""></td><td><div class="tab">:</td><td><div class="tab"><?php echo $alamat;?></td></tr>
  </table>
</td></tr></tr>
<td><center><div class="tab">@SDN TEMAJI 2016</center></td></tr>
</table>
</td><div class="skelp"></div>
<?php } ?>
</table>
<script>
 window.load = print_d();
 function print_d(){
 window.print();
 }
 </script>
