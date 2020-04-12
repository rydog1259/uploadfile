<?php
if (isset($_post['submit'])) {
  $files = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['Tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.',$fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = $array('jpg', 'jpeg',);

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($filesSize < 5000000) {
        $fileNameNew = uniqid('', true).".".$
        $fileDestination = 'uploads/'.$fileNameNew;
        move_uploded_file($fileTmpName, $fileDestination);
        header("location: index.php?/uploadsucess");
    }    else {
            echo "Your files is too big!";
        }
    }   else {
      Echo "there was and error with your file>";
    }
      }   else {
    Echo "you can not upload thid kind of file.";
  }
}


 ?>
