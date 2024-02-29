<?php
$Con = mysqli_connect('localhost', 'root', '', 'computer');

$Name = $_POST['name'];
$Password = $_POST['password'];

$result = mysqli_query($Con, "SELECT * FROM `tbluser` WHERE (UserName = '$Name' OR Email ='$Name') AND Password  = '$Password'");

session_start();

if(mysqli_num_rows($result)){
    $_SESSION['user'] = $Name;
    echo "
            <script>
            alert('Login successfully!');
            window.location.href='../index.php';
            </script>
        ";
}
else {
    echo "
            <script>
            alert('This username or password incorrect!');
            window.location.href='login.php';
            </script>
        ";
}
?>