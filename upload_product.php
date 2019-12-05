<?php
session_start();
$cus_id = $_SESSION['cus_id'];
$pro_id = $_SESSION['pro_id'];
include("dbconnect.php");
include('smart_resize_image.function.php');
$target_dir = "images/Product/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$filename = basename($_FILES["fileToUpload"]["name"]);
$_SESSION["filename"] = $filename;


$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<script>alert('The image ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.');</script>";
        smart_resize_image($target_file , null, 300, 200, false , $target_file , false , false ,100 );
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
$sql = "update product set img='images/Product/".$filename."' where cus_id = '".$cus_id."' and pro_id = '".$pro_id."';";
if($conn->query($sql)){
    //echo "<script>alert('The image is uploaded successfully.');</script>";
    echo "<script type=text/javascript>location.href = 'Myproduct.php';</script>";
    }else{
    echo "<script>alert('Sorry your product details were not uploaded,please try again.);</script>";
    echo "<script type=text/javascript>location.href = Myproduct.php';</script>";
    }
?>