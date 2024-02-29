<?php

if(isset($_POST['submit'])) {
    include 'Config.php';
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_location  = $_FILES['Pimage']['tmp_name'];
    $image_name  = $_FILES['Pimage']['name'];
    $image_des = "Uploads/" . $image_name;
    move_uploaded_file($image_location, "Uploads/" . $image_name);

    $product_category = $_POST['Pages'];

    // insert product
    mysqli_query($con,"INSERT INTO `tblproduct`(`PName`, `PPrice`, `PImage`, `PCategory`) VALUES ('$product_name','$product_price','$image_des ','$product_category')");
    
    header("location:index.php");
}
?>
