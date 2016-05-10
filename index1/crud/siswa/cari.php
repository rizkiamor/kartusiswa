<?php
$cari = $_POST['kdedit'];
 ?>
 <table class="table">
   <tr><td><center><b>NIS</b></td><td><center><b>NAMA</b></td><td><center><b>TEMPAT</b></td><td><center><b>TGL LAHIR</b></td>
     <td><center><b>AGAMA</b></td><td><center><b>J KEL</b></td><td><center><b>ALAMAT</b></td>
     <td><center><b>FOTO</b></td><td><center><b>NPSN</b></td></center>
   </tr>
   <?php require_once"../conn.php";
 //$pdo=$amorpdo->prepare("select*from siswa ");
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
   <td><a href="#" class="list-group-item"><?php echo $nis; ?></a></td>
   <td><a href="#" class="list-group-item"><?php echo $nama; ?></a></td>
   <td><a href="#" class="list-group-item"><?php echo $tempat; ?></a></td>
   <td><a href="#" class="list-group-item"><?php echo $tgl; ?></a></td>
   <td><a href="#" class="list-group-item"><?php echo $agama; ?></a></td>
   <td><a href="#" class="list-group-item"><?php echo $kelamin; ?></a></td>
   <td><a href="#" class="list-group-item"><?php echo $alamat; ?></a></td>
   <td><a href="#" class="list-group-item">
     <?php
     if ($foto==null) {
       echo "kosong";
     }
       else {
         echo //$foto;
         "Ada";
       }
     ?></a></td>
   <td><a href="#" class="list-group-item"><?php echo $npsn; ?></a></td>
   <td style="width:150px;">
 <div class="btn-group">
 <button type="button" class="btn btn-success" onclick="siswa_edit(this.value);" value="<?php echo $tampil['nis'] ?>">Ubah</button></a>
 <button type="button" class="btn btn-danger"  onclick="siswa_hapus(this.value);" value="<?php echo $tampil['nis'] ?>">Hapus</button></div></td>
 </tr>
 <?php } ?>
 </table>
