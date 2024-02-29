<!-- PHP UPDATE CODE -->
<?php
 include 'Config.php';
        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $product_name = $_POST['Pname'];
            $product_price = $_POST['Pprice'];
            $product_image = $_FILES['Pimage'];
            $image_location  = $_FILES['Pimage']['tmp_name'];
            $image_name  = $_FILES['Pimage']['name'];
            $image_des = "Uploads/" . $image_name;
            move_uploaded_file($image_location, "Uploads/" . $image_name);
        
            $product_category = $_POST['Pages'];

            mysqli_query($con, "UPDATE `tblproduct` SET `PName`='$product_name',
                            `PPrice`='$product_price',
                            `PImage`='$image_des',
                            `PCategory`='$product_category' WHERE ID = $id");
            header("location: index.php");
        }

?>