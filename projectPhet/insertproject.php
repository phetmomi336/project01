<?php
include 'connect.php'; 
$user = $_POST['username'];
$pass = $_POST['password'];

if(is_uploaded_file($_FILES['file1']['tmp_name'])){
    $new_image_name = 'pr_'.uniqid()."."
    .pathinfo(basename($_FILES['file1']['tmp_name'])
    ,PATHINFO_EXTENSION);
    $image_upload_path = "./img/".$new_image_name;
    move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path);
}else{
    $new_image_name = "";
}

$sql = "INSERT INTO member(username,password,photo)
        VALUE('$user','$pass','$new_image_name')";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo"<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
        echo"<script>window.location='home.html';</script>";
    }else{
        echo"<script>alert('ไม่สามารถบันนทึกมูลได้!!!');</script>";
    }
?>