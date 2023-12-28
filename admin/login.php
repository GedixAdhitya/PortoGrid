<?php

    session_start();
    if (isset($_SESSION['login'])) {
        header("location: dashboard.php");
        exit;
    }

    include('../koneksi.php');
    
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image"></div>

            <div class="col-md-6 right">
                
                <div class="input-box">
                <form action="login-process.php" method="post" class="form"> 
                   <header><a class="navbar-brand"><span class="text-primary  text-uppercase h3">Porto</span><span class="text-warning text-uppercase h3">Grid</span></a></header><br>
                   <div class="input-field">
                        <input type="text" class="input" name="username" required="" autocomplete="off">
                        <label for="email">Username</label> 
                    </div> 
                   <div class="input-field">
                        <input type="password" class="input" name="password" required="">
                        <label for="pass">Password</label>
                    </div> 
                   <div class="input-field">    
                        <input type="submit" class="submit" value="Login" >
                   </div> 
                   
                   <br>

                   <div class="copyright">
                    <span>Copyright &copy; <a href="../index.php"> PORTOGRID</a></span>
                   </div>
                </div>  
            </div>
        </div>
    </div>
</div>
</body>
</html>