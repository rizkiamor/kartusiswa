<?php
require_once"../conn.php";
$kdedit=$_POST['klihat'];
echo '<br>';
$edit=$amorpdo->prepare("select*from siswa where nis='$kdedit' ");
$edit->execute();
$edit=$edit->fetch();
?>
<form class="" method="post" action="crud/cetak/print.php" target="_blank">
<input type="hidden" name="id" value="<?php echo $kdedit;?>">
<table border="1">
<td><table border="0"><td width="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../index1/img/tut.png" width="65%"><td><td width="70%"><center><h2><b>SDN TEMAJI I<br>
KARTU TANDA SISWA</b></h2></center></td><td width="10"></td><tr>
<td></td></tr>
<td></td><td colspan="2"><center>Alamat : Jl Tuban - Semarang km.18<center></td></table></td>
<td rowspan="4"><button type="submit" class="btn btn-danger pull-right" ><h1><i class="fa fa-print"></i></h1></button></td><tr>
</tr>
<tr>
<td><table border="0"><td rowspan="7" width="25" height="180"></td><td rowspan="7"><img src="<?php echo $edit['foto']; ?>" width="150"></td>
<td width="20"><td>NIS</td><td width="15"></td><td width="15">:</td><td><?php echo $edit['nis'];?></td><tr>
<td width="20"><td>NAMA</td><td width="15"></td><td>:</td><td><?php echo $edit['nama'];?></td></tr><tr>
<td width="20"><td>TEMPAT</td><td width="15"></td><td>:</td><td><?php echo $edit['tempat'].",&nbsp;".$edit['tgl'];?></td></td></tr><tr>
<td width="20"><td>AGAMA</td><td width="15"></td><td>:</td><td><?php echo $edit['agama'];?></td></tr><tr>
<td width="20"><td>J KELAMIN</td><td width="15"></td><td>:</td><td><?php echo $edit['kelamin'];?></td></tr><tr>
<td width="20"><td>ALAMAT</td><td width="15"></td><td>:</td><td><?php echo $edit['alamat'];?></td></tr><tr>
  <td width="20"><td></td><td width="15"></td><td></td><td></td></tr><tr>
</table></td>
<tr><td><center>@SDN TEMAJI 2016</center></td></tr></table></td></table>
</form>
