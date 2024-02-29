<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 bg-white shadow font-monospace border border-info m-auto mt-5">
                <p class="text-warning fs-3 fw-bold my-3 text-center">User Register</p>
                <form action="insert.php" method="post">
                    <div class="mb-3">
                        <label for="">Username: </label>
                        <input type='text' name="name" placeholder="Enter your username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Email: </label>
                        <input type='email' name="email" placeholder="Enter your email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Phone: </label>
                        <input type='number' name="number" placeholder="Enter your phone" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Password: </label>
                        <input type='password' name="password" placeholder="Enter your password" class="form-control">
                    </div>
                    <div class="mb-3 text-center">
                        <span>
                            Have a account? 
                        <a href="login.php" class="text-success">Login</a>
                        </span>
                        
                    </div>
                    <div class="mb-3">
                        <button name="submit" class="btn w-100 bg-primary fs-4 text-white" >REGISTER</button>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>


</body>
</html>