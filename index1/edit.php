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
              <a href="javascript:void(0)" onclick="profil()">
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
                <li><a href="javascript:void(0)" onclick="upload()"><i class="fa fa-circle-o"></i>Cetak</a></li>
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
          <div class="container">
<div class="row">
  <div class="col-sm-4">
    <b>PILIH NAMA</b>
  <?php require_once"/crud/conn.php";?>
  <select class="form-control" id="lihatedit" onkeyup="lihatedit(this.value);">
    <?php $pdo=$amorpdo->prepare("select*from siswa");
          $pdo->execute(); foreach ($pdo as $pdo){ ?>
  <option value="<?php echo $pdo['nama'];?>"><?php echo $pdo['nama'];?></option>
  <?php } ?></select>
  </div>
  <div class="col-sm-8">
    <div id="lihat">
    </div>
<!-- upload -->
<form action="" method="post" enctype="multipart/form-data">
<br>

<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Gambar</span>
  <input type="file" class="form-control" name="gambar" aria-describedby="sizing-addon1">
</div>

      <div class="bataslog">
      </div>

    <div class="button">
       <button type="submit" name="btn-upload" value="login" class="btn btn-success btn-lg">Submit</button>
    </div>
</div>
</form>

  <?php
  if(isset($_POST['btn-upload']))
  {
          $pic = rand(1000,100000)."-".$_FILES['gambar']['name'];
          $pic_loc = $_FILES['gambar']['tmp_name'];
          $folder="img/";
          if(move_uploaded_file($pic_loc,$folder.$pic))
          {
            $picture = 'img/'.$pic;
            header("location:index2.php");
          }
          else
          {

          }
  }
  ?>
  <!-- end -->
  </div>
</div>
</div>
        <section class="content-header">
          <h1>

          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

    </div>
</div>
      </div><!--isi-->

      </div>
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Jenu</b> Tuban
        </div>
        <strong>Copyright &copy; 2016 .</strong> SD NEGERI TEMAJI
      </footer>

      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="bootstrap/js/jquery-ui.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="dist/js/app.min.js"></script>
    <script src="bootstrap/js/proses2.js"></script>
  </body>
</html>
