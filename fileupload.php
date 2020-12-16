
<?php


?>

<?php

  if(!empty($_FILES['uploaded_file']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>


<!DOCTYPE html>
<html>
<head>
  <title>Upload your files</title>
</head>
<body>
  <form enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file" id="upload_file"></input><br />
    <input type="submit" name="upload" value="Upload"></input>
  </form>
</body>
</html>