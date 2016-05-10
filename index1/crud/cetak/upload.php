<center>
	<h1>Menampilkan Modal Bootstrap!</h1>
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Tampilkan!</button>
</center>

	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Judul modal</h4>
				</div>
				<div class="modal-body">

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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary">Aksi</button>
        </div>
      </div>
    </div>
  </div>
