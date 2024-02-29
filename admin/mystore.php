<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home-Page</title>


    <!-- Bootrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php
    session_start();
    if(!$_SESSION['admin']){
        header("location:form/login.php");
    }
?>
<body>
    <nav class="navbar bg-dark ">
    <div class="container-fluid text-white">
        <a class="navbar-brand text-white">Technology Store</a>
        <span>
        <i class="fa-solid fa-user-pen"></i>
        Hello <?php echo $_SESSION['admin'] ; ?> | 
        <i class="fa-solid fa-right-from-bracket"></i>
        <a href="form/logout.php" class="text-decoration-none text-white">Log-out</a> | 
        <a href="../user/index.php" class="text-decoration-none text-white">User-Panel</a>
        </span>
    </div>
    </nav>

    <div>
        <h2 class="text-center"> Dashboard </h2>
    </div>

    <div class="bg-primary text-center col-md-6 m-auto">
        <a href="products/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Add Product</a>
        <a href="user.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Users</a>
    </div>
</body>
</html>