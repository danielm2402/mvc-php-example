<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include "style.css" ?>
    </style>

    <title>Login</title>
</head>

<body>
    <div class="login-page">
        <div class="container-form">
            <div class="container-left-form">
                <h2>Welcome Back!</h2>
                <h4>Software Engineering Laboratory III</h4>
                <button>SIGN UP</button>
            </div>
            <div class="container-right-form">
                <h2>SIGN IN</h2>
                <form method="POST" action="/mvc-php/index.php?type=user&action=login">
                    <input required type="text" placeholder="Username" name="username" id="username" />
                    <input required type="password" placeholder="Password" name="password" id="password" />
                    <button type="submit">SIGN IN</button>
                </form>
                <h5><?php echo $_SESSION["error"]; ?></h5>

            </div>


        </div>
    </div>
</body>

</html>