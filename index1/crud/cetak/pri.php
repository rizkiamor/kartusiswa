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
<?php
require_once"../conn.php";
//$kdedit=$_POST['id'];
$edit=$amorpdo->prepare("select*from siswa where nis='004' ");
$edit->execute();
$edit=$edit->fetch();
?><center>
<table border="1">
<td>
 <!--depan-->
 <table border="0">
 <td width="10"></td><td width="" ><img src="../../img/tut.png" width="80"></td><td width="25"></td>
 <td colspan="2" width=""><center><h4><b>KARTU TANDA SISWA<br>SDN TEMAJI I</b></h4>
 <center><div class="tab">Alamat : Jl Tuban - Semarang km.18</div><center></td>
 </table>
</td>
<td rowspan="3">
  <!--belakang-->
  <table>
  <td width=""><img src="../../img/belakang.png" width="400"></td>
</table>
</td>
<tr>
<td>
  <table border="0"><td rowspan="7" width="7" height="140"></td><td rowspan="7"><img src="../../<?php echo $edit['foto']; ?>" width="130"></td>
  <td width="10"><td><div class="tab">NIS</div></td><td width="9"></td><td width="12"><div class="tab">:</td><td><div class="tab"><?php echo $edit['nis'];?></td><td width="5"></td><tr>
  <td width=""><td><div class="tab">NAMA</td><td width=""></td><td><div class="tab">:</td><td><div class="tab"><?php echo $edit['nama'];?></td></tr>
  <td width=""><td><div class="tab">TEMPAT</td><td width=""></td><td><div class="tab">:</td><td><div class="tab"><?php echo $edit['tempat'].",&nbsp;".$edit['tgl'];?></td></td></tr>
  <td width=""><td><div class="tab">AGAMA</td><td width=""></td><td><div class="tab">:</td><td><div class="tab"><?php echo $edit['agama'];?></td></tr>
  <td width=""><td><div class="tab">JENIS KELAMIN</td><td width=""></td><td><div class="tab">:</td><td><div class="tab"><?php echo $edit['kelamin'];?></td></tr>
  <td width=""><td><div class="tab">ALAMAT</td><td width=""></td><td><div class="tab">:</td><td><div class="tab"><?php echo $edit['alamat'];?></td></tr>
  </table>
</td></tr></tr>
<td><center><div class="tab">@SDN TEMAJI 2016</center></td></tr>
</table>
