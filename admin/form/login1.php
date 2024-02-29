<?php
 $con = mysqli_connect('localhost','root','','computer');

 $AD_name = $_POST['username'];
 $AD_pass = $_POST['userpassword'];

 $result = mysqli_query($con, "SELECT * FROM `admin` WHERE username = '$AD_name' AND userpassword = '$AD_pass' ");

 session_start();

 if(mysqli_num_rows($result)){
    $_SESSION['admin'] = $AD_name;
    echo "
        <script>
        alert('Login successful');
        window.location.href='../mystore.php';
        </script>

    ";
 }else {
    echo "
        <script>
        alert('Invalid username or password');
        window.location.href='login.php';
        </script>
    ";
 }

?>  