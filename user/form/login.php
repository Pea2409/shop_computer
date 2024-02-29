<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 bg-white shadow font-monospace border border-info m-auto mt-5">
                <p class="text-warning fs-3 fw-bold my-3 text-center">Login</p>
                <form action="checklogin.php" method="post">
                    <div class="mb-3">
                        <label for="">Username: </label>
                        <input type='text' name="name" placeholder="Enter your username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Password: </label>
                        <input type='password' name="password" placeholder="Enter your password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <span>
                            Don't have an account?
                            <a href="register.php" class=" text-danger">Register</a>
                        </span>
                    </div>
                    <div class="mb-3">
                        <button class="btn w-100 bg-primary fs-4 text-white" >LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
</html>