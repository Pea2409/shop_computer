<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-Page</title>
    <!-- Bootrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-error mt-3">
                <form action="insert.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Product Detail</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Name:</label>
                        <input type="text" name="Pname" class="form-control" placeholder="Enter product name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Price:</label>
                        <input type="text" name="Pprice" class="form-control" placeholder="Enter product price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Product Image:</label>
                        <input class="form-control" type="file" name="Pimage">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Page Category:</label>
                        <select class="form-select" name="Pages">
                            <option value="Home">Home</option>
                            <option value="Motherboards">Motherboards</option>
                            <option value="Processors">Processors</option>
                            <option value="Memory">Memory</option>
                            <option value="Storage">Storage</option>
                            <option value="VGA">Graphics Cards</option>
                        </select>
                    </div>
                    <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Fetch data -->

<div class="container">
    <div class="row">
        <div class="col-md-12 m-auto">
            <table class="table border boder-primary table-hover border my-5">
                <thead class="bg-dark text-white fs-5 font-monospace">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Update</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <?php
                        include 'Config.php';
                        $Record = mysqli_query($con,"SELECT * FROM `tblproduct`");

                        while($row = mysqli_fetch_array($Record)){
                            echo "
                            <tr>
                                <td>$row[Id]</td>
                                <td>$row[PName]</td>
                                <td>$row[PPrice]</td>
                                <td>
                                    <img src='$row[PImage]' height='100px' width='100px'>
                                </td>
                                <td>$row[PCategory]</td>
                                <td>
                                <a href='update.php?ID={$row['Id']}' class='btn btn-warning'>Update</a>
                                </td> 
                                <td>
                                <a href='delete.php?ID={$row['Id']}' class='btn btn-danger'>Delete</a>
                                </td>   
                            </tr>
                            ";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>