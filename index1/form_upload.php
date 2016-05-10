<?php include_once"../session.php";
include_once"header.php"; ?>

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->

            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['username'];?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->

          <ul class="sidebar-menu">
            <li class="header">MAIN MENU</li>

            <li class="treeview">
              <a href="../index1">
                <i class="fa fa-laptop"></i>
                <span>Profil Sekolah</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Siswa</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="javascript:void(0)" onclick="siswak()"><i class="fa fa-circle-o"></i>Tampil</a></li>
              </ul>
              <ul class="treeview-menu">
                <li><a href="javascript:void(0)" onclick="cetak()"><i class="fa fa-circle-o"></i>Cetak</a></li>
              </ul>
              <ul class="treeview-menu">
                <li><a href="./form_upload.php"><i class="fa fa-circle-o"></i>Upload</a></li>
              </ul>
            </li>
            <li>
              <a href="JavaScript:void(0)" onclick="user()">
                <i class="fa fa-user"></i> <span>User</span>
                <small class="label pull-right bg-red"></small>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>


              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div id="isi"><!--isi-->

                    <section class="content-header">
                      <ol class="breadcrumb">
                        <li>  <!--<button type="button" class="btn btn-danger pull-right" onclick="siswa_tam()">+</button>-->
                          <div class="col-lg-5 pull-right">
                           <div class="input-group">
                             <span class="input-group-addon">
                               <i class="fa fa-search"></i>
                             </span>
                             <input type="text" class="form-control" onkeyup="upload_cari(this.value);">
                           </div><!-- /input-group -->
                         </div><!-- /.col-lg-6 --></li>
                        <li class="active">
                      </li>
                      </ol>
                    </section>

          <div class="panel panel-default">
          <div class="panel-heading"><b>Form Image</b></div>
          <div class="row">
          <div class="col-sm-4">
          <div id="aksi">
            <table class="table">
              <tr><td><center><b>NAMA</b></td><td><center><b>FOTO</b></td>

              </tr>
              <?php require_once"./crud/conn.php";
            //$pdo=$amorpdo->prepare("select*from siswa ");
            //$pdo=$amorpdo->prepare("select*from siswa where nama LIKE '%us%' ");
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
              <tr>
              <td><a href="#" onclick="flihat(this.value);" value="cobalah" class="list-group-item"><?php echo $nama; ?></a></td>
              <td><a href="#" class="list-group-item"><?php
              if ($foto==null) {
                echo "kosong";
              }
                else {
                  echo //$foto;
                  "Ada";
                }
              ?></a></td>

              <td style="width:50px;">
            <div class="btn-group">
            <button type="button" class="btn btn-success" onclick="flihat(this.value);" value="<?php echo $nis; ?>">></button></a>
            <?php } ?>
            </table>
          </div>
          </div>
          <div class="col-sm-5">
            <?php echo $ni = $kdedit=$_POST['flihat']; ?>
            <div id="foto">

            </div>
            <?php
            if(isset($_POST['btn-upload'])){
              $ni = $_POST['ni'];
              $pic = rand(1000,100000)."-".$_FILES['gambar']['name'];
              $pic_loc = $_FILES['gambar']['tmp_name'];
              $folder="./upload_images/";
              if(move_uploaded_file($pic_loc,$folder.$pic))
              {
                $picture = 'upload_images/'.$pic;
                echo '<center><img class="preview" width="50%" alt="" src="'.$picture.'" />';
                echo $ni;
                $foto_u=$amorpdo->prepare("UPDATE siswa SET
                 foto = '$picture'
                 WHERE nis='$ni'");
                 $foto_u->execute();
              }
              else
              {

              }
      }
      ?>
         </div>
         <div class="col-sm-1">
          <?php echo $ni = $kdedit=$_POST['flihat']; ?>
        </div>
</div>
</div>
</div>.
</div><!--isi-->
</div>
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Jenu</b> Tuban
  </div>
  <strong>Copyright &copy; 2016 .</strong> SDN TEMAJI I

</footer>

<div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="bootstrap/js/jquery-ui.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="bootstrap/js/proses3.js"></script>
<script src="bootstrap/js/jquery.form.js"></script>
<script>
window.load = print_d();
function print_d(){
window.print();
}
</script>
</body>
</html>
