<?php

if (isset($_POST['subm'])) {
    $fileName = $_FILES['uploadedFile']['name'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileTmpName = $_FILES['uploadedFile']['tmp_name'];
    $fileError = $_FILES['uploadedFile']["error"];
    $fileExt = explode('.', $fileName);
    $fileExtension = strtolower(end($fileExt));
    $allowedfiles = array('jpg', 'png', 'txt', 'doc');

    if (in_array($fileExtension, $allowedfiles)) {
        if ($fileError === 0) {

            if ($fileSize < 20000) {
                $uploadFileDir = 'upload/' . $fileName; 
                move_uploaded_file($fileTmpName, $uploadFileDir);
            } else {
                echo "The file is too big!";
            }
        } else {
            echo "There is an error uploading";
        }
    } else {
        echo "Type not supported!";
    }
}
?>
