<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>
    <!-- Bootrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
include 'mystore.php';
$con = mysqli_connect('localhost','root','','computer');
$record = mysqli_query($con, "SELECT * FROM `tbluser`");
$row_count = mysqli_num_rows($record);
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10">

<table class="table table-secondary table-bordered ">
    <thead class="text-center">
        <th>S.N</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Password</th>
        <th>Delete</th>
    </thead>
    <tbody class="text-center ">
        <?php
            $i = 0;
            while ($row = mysqli_fetch_array($record)) {
                echo "
                <tr>
                    <td><?php ++$i; ?></td>
                    <td>$row[UserName]</td>
                    <td>$row[Email]</td>
                    <td>$row[Phone]</td>
                    <td>$row[Password]</td>
                    <td>
                    <a href='deleteUser.php? ID=$row[Id]' class='btn btn-outline-primary'>Delete</a>
                    </td>
                </tr>
                ";
            }

        ?>
    </tbody>
</table>
</div>
<div class="col-md-2 pr-5 text-center">
    <h3>Total user: </h3>
    <h1><?php echo $row_count; ?></h1>
</div>
</div>
</div>
</body>
</html>