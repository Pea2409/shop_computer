<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page</title>
     <!-- Bootrap CDN -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php 
    include 'header.php';
?>
<body>
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">
        

    <h1 class="text-warning font-monospace my-3 text-center">Processors</h1>
    <?php 
    include 'Config.php';
    $Record = mysqli_query($con, "SELECT * FROM tblproduct");
     while ($row = mysqli_fetch_array($Record)){
         $check_page = $row['PCategory'];
         if($check_page ==='Processors'){
      echo "<div class='col-md-6 col-lg-4 m-auto mb-3'>
      <form action='InsertCart.php' method='POST'>
      <div class='card m-auto' style='width: 18rem;'>
        <img src='../admin/products/$row[PImage]' style='width: 250px; height: 250px' class='card-img-top m-auto ' alt='...'>
        <div class='card-body text-center'>
          <h5 class='card-title fs-4 '>$row[PName]</h5>
          <p class='card-text  fs-6 '>Price: $row[PPrice]</p>
          <input type='hidden' name='PName' value='$row[PName]'> 
          <input type='hidden' name='PPrice' value='$row[PPrice]'> 
          <input type ='number' name='PQuantity' value='min='1' max ='20'' placeholder='Quantity'></br></br>
          <input type='submit' name='addCart' class='btn btn-danger text-center text-white w-100' value='Add to Cart' >
        </div>
      </div>
</form>
            </div>
            ";
}  
}
?>
      </div>
    </div>
  </div>
</body>
</html>