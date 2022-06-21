<?php
$db = "dropzone_practice";
$host = "localhost";
$user = "root";
$pass = "";
$conn = mysqli_connect($host, $user, $pass, $db) or die("Connection Error: " . mysqli_connect_error());

$ds = DIRECTORY_SEPARATOR;

$storeFolder = 'uploads';

if (!empty($_FILES)) {

    // echo "<pre>";
    // print_r($_FILES);

    $tempFile = $_FILES['file']['tmp_name'];          //3             

    $targetPath = dirname(__FILE__) . $ds . $storeFolder . $ds;  //4
    // echo $targetPath;

    $targetFile =  $targetPath . $_FILES['file']['name'];  //5
    // echo $targetFile;

    $file_moved = move_uploaded_file($tempFile, $targetFile); //6
    if ($file_moved) {
        echo "File successfully Transfered";
    } else {
        echo "File Does Not Transferred";
    }
}
