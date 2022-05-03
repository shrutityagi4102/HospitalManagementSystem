<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/f.png">
    <link rel="stylesheet" href="login3.css">
</head>

<body>
    <form method = "POST" class="login" action = "welcome2.php">
    <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <p class="title">DOCTOR LOGIN</p>
        <input type="text" name="email" placeholder="E-mail" autofocus/>
        <i class="fa fa-user"></i>
        <input type="password" name="password" placeholder="Password" />
        <i class="fa fa-key"></i>
        <!-- <a href="#">Forgot your password?</a> -->
        <button>
            <i class="spinner"></i>
            <span class="state">Log in</span>
          </button>
    </form>
    <script src="login.js"></script>
</body>

</html>

