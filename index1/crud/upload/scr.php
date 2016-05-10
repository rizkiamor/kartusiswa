<?php $ni = $kdedit=$_POST['flihat'];
echo $ni;?>
<h2>INSERT</h2>
    <form class="uploadform" method="post" enctype="multipart/form-data" action=''>
        <div class="input-group input-group-lg">
          <span class="input-group-addon" id="sizing-addon1">Gambar</span>
          <input type="file" class="form-control" name="gambar" aria-describedby="sizing-addon1" />
          <input type="hidden" name="ni" id="ni" value="<?php echo $ni; ?>">
          <span class="input-group-addon" id="sizing-addon1">
            <input type="submit" value="Submit" name="btn-upload" id="btn-upload" class="btn btn-success btn-xs"></span>
        </div>

</form>
    <div id='viewimage'><div>.</div></div>
