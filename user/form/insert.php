<?php
$Con = mysqli_connect('localhost', 'root', '', 'computer');

if(isset($_POST['submit'])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Phone = $_POST['number'];
    $Password = $_POST['password'];

    $Dup_Email = mysqli_query($Con, "SELECT * FROM `tbluser` WHERE Email = '$Email'");
    $Dup_username = mysqli_query($Con, "SELECT * FROM `tbluser` WHERE UserName = '$Name'");
    if(mysqli_num_rows($Dup_Email)){
        echo "
            <script>
            alert('This email are already taken');
            window.location.href='register.php';
            </script>
        ";
    } else if(mysqli_num_rows($Dup_username)){
        echo "
            <script>
            alert('This username are already taken');
            window.location.href='register.php';
            </script>
        ";
    } else {
        mysqli_query($Con, "INSERT INTO `tbluser`(`UserName`, `Email`, `Phone`, `Password`) 
        VALUES ('$Name','$Email','$Phone','$Password')");
        echo "
        <script>
        alert('Register successfully');
        window.location.href='login.php';
        </script>
    ";
    }

}

?>