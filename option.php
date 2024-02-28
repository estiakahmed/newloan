<?php
$folder = (isset($_GET['folder'])) ? $_GET['folder'] : "";
$target_dir = "./$folder"."/";




if(isset($_POST["submit"])) {
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

  if (!file_exists($target_dir)) {
    if (!mkdir($target_dir, 0777, true)) {
      // die('Failed to create directories...');
    }
  }
  // else {
  //   echo "The directory exists.";
  // }

  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else { 
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
<form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" name="submit">
</form>