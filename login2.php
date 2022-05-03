<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="login2.css">
</head>

<body>
    
    <form method="POST" style ="padding-top:10px" class="login" action="welcome.php"> 
    
    <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <p class="title">ADMIN LOGIN</p>
       
        <input type="text" name="email" placeholder="E-mail" autofocus/>
        <i class="fa fa-user"></i>
        <input type="password" name="password" placeholder="Password" />
        <i class="fa fa-key"></i>

        <button>
            <i class="spinner"></i>
            <span class="state">Log in</span>
          </button>
        
    </form>
    
    <script src="login.js"></script>
</body>

</html>