<?php
require "login.php";
require_once "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.1-dist/js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 style="color:green;">ADMIN PANEL</h1>
        <form action="login.php" method="POST">
            <div class="col-md-6">
                <div>
                <input type="text"  class="form-control " placeholder="username" id="username" name="username" required><br>
                </div>
                
                <div>
                <input type="password"  class="form-control"  placeholder="password" id="password" name="password" required><br>
                </div>

                <div >
                <button type="submit" class="btn btn-success">Login</button> 
                </div>
               
            </div>
            
        </form>
    </div>
</body>
</html>