<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Upload Image Without Page Refresh!</title>

        <script type="text/javascript" >
            $(document).ready(function() {
                $('#submitbtn').click(function() {
                    $("#viewimage").html('');
                    $("#viewimage").html('<img src="img/loading.gif" />');
                    $(".uploadform").ajaxForm({
                        target: '#viewimage'
                    }).submit();
                });
            });
        </script>
    </head>
    <body>
        <h2>Upload Image Without Page Refresh!</h2>

            <form class="uploadform" method="post" enctype="multipart/form-data" action=''>
                Upload your image <input type="file" name="imagefile" />
				<input type="submit" value="Submit" name="submitbtn" id="submitbtn">
			</form>

            <div id='viewimage'></div>

    </body>
</html>
<?php
if(isset($_POST['submitbtn']))
{
  $file_formats = array("jpg", "png", "gif", "bmp");

  $filepath = "upload_images/";

  if ($_POST['submitbtn']=="Submit") {

   $name = $_FILES['imagefile']['name']; // filename to get file's extension
   $size = $_FILES['imagefile']['size'];

   if (strlen($name)) {
   	$extension = substr($name, strrpos($name, '.')+1);
   	if (in_array($extension, $file_formats)) { // check it if it's a valid format or not
   		if ($size < (2048 * 1024)) { // check it if it's bigger than 2 mb or no
   			$imagename = md5(uniqid() . time()) . "." . $extension;
   			$tmp = $_FILES['imagefile']['tmp_name'];
   				if (move_uploaded_file($tmp, $filepath . $imagename)) {
   					echo '<img class="preview" alt="" src="'.$filepath.'/'. $imagename .'" />';
   				} else {
   					echo "Could not move the file.";
   				}
   		} else {
   			echo "Your image size is bigger than 2MB.";
   		}
   	} else {
   			echo "Invalid file format.";
   	}
   } else {
   	echo "Please select image..!";
   }
   exit();
  }
}
?>
