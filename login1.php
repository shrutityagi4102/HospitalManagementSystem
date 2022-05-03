<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets3/img/favicon.ico">
    <link rel="stylesheet" href="login1.css">

</head>

<body>
    <!-- <img onclick="window.location.href = '/' " class="dumbo" src="assets/img/logo-dark.png" alt="logo" align="left"> -->
    <form class="login" method="post" action="welcome3.php">
    <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <p class="title">NURSE LOGIN</p>
        <input type="text" placeholder="E-mail" name="email" autofocus/>
        <i class="fa fa-user"></i>
        <input type="password" placeholder="Password" name="password" />
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