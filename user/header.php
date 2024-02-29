<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
session_start();
$count = 0;
if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
}
?>
<nav class="navbar">
  <div class="container-fluid font-monospace ">
    <a class="navbar-brand pb-2"><img src="logo.jpg" style="width: 150px;"></a>
    <div class="d-flex fs-5 text-primary">
        <a href="index.php" class="text-decoration-none pe-2"><i class="fa-solid fa-house me-2 "></i>Home |</a>
        <a href="viewCart.php" class=" text-decoration-none pe-2"><i class="fa-solid fa-cart-shopping me-2 "></i>Cart(<?php echo $count; ?>) |</a>
         
        <?php 
        if(isset($_SESSION["user"])){
            
            echo "<span class='pe-2'>
            <i class='fa-solid fa-user'></i>Hello, ";
            echo $_SESSION["user"];
            echo " |";  
            echo "<a href='form/logout.php' class='text-decoration-none pe-2'><i class='fa-solid fa-right-from-bracket me-2'></i>Logout |</a>";
        } else {
            echo "<a href='form/login.php' class='text-decoration-none pe-2'><i class='fa-solid fa-right-from-bracket me-2'></i>Login |</a>";
            echo "<a href='form/register.php' class='text-decoration-none pe-2'><i class='fa-solid fa-user-plus me-2'></i>Register |</a>";
        }
           
         ?>
        
        <a href="../admin/mystore.php" class="text-decoration-none pe-2 me-2 ">Admin</a>
        </span>
    </div>
</div>
</nav> 
<div class=" container-fluid bg-primary sticky-top font-monospace w-100 ">
        <ul class="list-unstyled d-flex justify-content-center h-auto">
            <li> <a href="Motherboards.php" class="text-decoration-none text-white fw-bold fs-4 px-5">Motherboards</a></li>
            <li> <a href="Processors.php" class="text-decoration-none text-white fw-bold fs-4 px-5">Processors</a></li>
            <li> <a href="Memory.php" class="text-decoration-none text-white fw-bold fs-4 px-5">Memory</a></li>
            <li> <a href="Storage.php" class="text-decoration-none text-white fw-bold fs-4 px-5">Storage</a></li>
            <li> <a href="Cards.php" class="text-decoration-none text-white fw-bold fs-4 px-5">Graphics Cards</a></li>
        </ul>
    </div> 
</body>
</html>